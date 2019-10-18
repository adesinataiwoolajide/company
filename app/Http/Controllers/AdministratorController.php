<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\{User, Categories, Clients, ProjectCategories,ProjectTypes, TeamCategories, Teams};
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Gate;
class AdministratorController extends Controller
{

    public function userlogin(Request $request)
    {

        $data = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];
        //$user = User::where('user_id', 1)->first();
        // $user->assignRole('Administrator');
        if(Auth::attempt($data)){

            switch ($usertype){
                case (auth()->user()->hasRole('Administrator') OR
                    (auth()->user()->hasRole('Admin')));
                    $message = "Administrator";
                break;

                case (auth()->user()->hasRole('Secretary'));
                    $message = "Secretary";
                    auth()->user()->givePermissionTo([

                    ]);
                break;

                default:
                $message = "un Authorised User";
            }

            if(!empty($usertype)){

                $user = User::where('email', Auth::user()->email)->first();

                return redirect()->route("administrator.dashboard")->with([
                    "user" => $user,
                    "success" => Auth::user()->name. " ". "Welcome To $message  Dashboard"
                ]);

            }else{

                return redirect()->back()->with([
                    "error" => "Ooops!!! Invalid User Name or Password",
                ]);
            }
        }else{

            return redirect()->back()->with([
                "error" => "Ooops!! Your Account Does Not Exist",
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return view("auth.login");
    }
    public function index()
    {
        if(Gate::allows('Administrator', auth()->user())){
            $user = User::all();
            return view("administrator.dashboard")->with([
                "user" => $user,
            ]);
        }elseif(auth()->user()->hasRole('Secretary')){

        }else{
            return redirect()->back()->with([
                "error" => "Ooops!! You DOnt Have Access to this page",
            ]);
        }

    }
}

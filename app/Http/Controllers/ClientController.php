<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Clients};
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\ClientRepository;
use Illuminate\Support\Facades\Gate;

class ClientController extends Controller
{
    protected $model;
    public function __construct(Clients $client)
    {
       // set the model
       $this->middleware('auth');
       $this->model = new ClientRepository($client);
       $this->middleware(['role:Administrator|Admin|Secretary']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client =Clients::orderBy('email', 'asc')->get();
        return view('administrator.clients.index')->with([
            'client' => $client,
        ]);
    }

    public function bin()
    {
        $user= Clients::onlyTrashed()->get();
        return view('administrator.users.recyclebin')->with([
            'user' => $user,
        ]);
    }

    public function restore($client_id)
    {
        Clients::withTrashed()->where('client_id', $client_id)->restore();
        $categ= $this->model->show($client_id);
        $name = $categ->client_name;
        $url = $categ->url;
        $email = auth()->user()->email;

        activity() ->performedOn($categ)->causedBy(auth()->user()->id)->withProperties([
            'name' => $name,
            'email' => $email,
            'url' => $url,
        ])->log('restored');
        return redirect()->back()->with([
            'success' => " You Have Restored". " ".$name. " " ." Details Successfully",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'client_name' =>'required|min:1|max:255|unique:clients',
            'client_url' =>'required|min:1|max:255|unique:clients',
            'client_banner' =>'file|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:4999',
        ]);

        if($request->hasFile('client_banner')){
            $filenameWithExt = $request->file('client_banner')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('client_banner')->getClientOriginalExtension();
            $cut = str_replace(" ", "_", $filename);
            $cutting = str_replace("-", "_", $cut);
            $fileNameToStore = $cutting.time().'.'.$extension;
            $path=$request->file('client_banner')->move('client_logo', $fileNameToStore);
        }else{
            $fileNameToStore = 'No File';
        }

        $data = ([
            "client" => new Clients,
            "client_name" => $request->input("client_name"),
            "client_url" => $request->input("client_url"),
            "client_banner" => $fileNameToStore,
        ]);

        if($this->model->create($data)){
            return redirect()->route("client.create")->with("success", "You Have Added "
            .$request->input("client_name"). " To The Client List Successfully");
        }else{
            return redirect()->back()->with("error", "Network Failure");
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($client_id)
    {
        $clit= $this->model->show($client_id);
        $client= $this->model->all();
        return view('administrator.clients.edit')->with([
            'client' => $client,
            'clit' => $clit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $client_id)
    {
        $this->validate($request, [
            'client_name' =>'required|min:1|max:255|unique:clients',
            'client_url' =>'required|min:1|max:255|unique:clients',
            'client_banner' =>'file|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:4999',
        ]);

        $clit= $this->model->show($client_id);

        if(!empty($request->hasFile('client_banner'))){
            $filenameWithExt = $request->file('client_banner')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('client_banner')->getClientOriginalExtension();
            $cut = str_replace(" ", "_", $filename);
            $cutting = str_replace("-", "_", $cut);
            $fileNameToStore = $cutting.time().'.'.$extension;
            $path=$request->file('client_banner')->move('client_logo', $fileNameToStore);
        }else{
            $fileNameToStore = $clit->client_banner;
        }
        $data = ([
            "client" => $this->model->show($client_id),
            "client_name" => $request->input("client_name"),
            "client_url" => $request->input("client_url"),
            "client_banner" => $fileNameToStore,
        ]);

        if($this->model->update($data, $course_id)){
            return redirect()->route("client.create")->with(
                "success", "You Have Updated The Client Details Successfully");
        }else{
            return redirect()->back()->with("error", "Network Failure");
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($client_id)
    {
        $client =  $this->model->show($client_id);
        $details= $client->client_name;
        if (($client->delete($client_id)) AND ($client->trashed())) {
            return redirect()->back()->with([
                'success' => "You Have Deleted $details From The Clients List Successfully",
            ]);
        }else{
            return redirect()->back()->with("error", "Network Failure");
        } 
    }
}

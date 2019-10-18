<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectTypeRepository;
use DB;
use App\{ProjectTypes};
use Illuminate\Support\Facades\Gate;
class ProjectTypesController extends Controller
{
    protected $model;
    public function __construct(ProjectTypes $type)
    {
       // set the model
       $this->model = new ProjectTypeRepository($type);
       $this->middleware(['role:Administrator|Admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = ProjectTypes::orderBy('type_name', 'asc')->get();
        return view("administrator.project_types.index")->with([
            'type' => $type,
        ]);
    }

    public function bin()
    {
        $type= ProjectTypes::onlyTrashed()->get();
        return view('administrator.project_types.recyclebin')->with([
            'type' => $type,
        ]);
    }

    public function restore($type_id)
    {
        if (Gate::allows('Administrator', auth()->user())) {
            ProjectTypes::withTrashed()
            ->where('type_id', $type_id)
            ->restore();
            $typo= $this->model->show($type_id);
            $name = $typo->type_name;
            $email = auth()->user()->email;

            activity()
                ->performedOn($typo)
                ->causedBy(auth()->user()->id)
                ->withProperties([
                    'type_name' => $name,
                ])
            ->log('restored');
            return redirect()->back()->with([
                'success' => " You Have Restored". " ".$name. " " ." Successfully",

            ]);

        }else{
            return redirect()->back()->with("error", "You Dont Have Access To The Recycle Bin");
        }

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
            'type_name' =>'required|min:1|max:255|unique:project_types',
        ]);

        $data = ([
            "type" => new ProjectTypes,
            "type_name" => $request->input("type_name"),
        ]);

        if($this->model->create($data)){
            return redirect()->route("project.type.create")->with("success", "You Have Added "
            .$request->input("type_name"). " To The Project Type Successfully");
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
    public function edit($type_id)
    {

        $typo= $this->model->show($type_id);
        $type= $this->model->all();
        return view('administrator.project_types.edit')->with([
            'type' => $type,
            'typo' => $typo,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type_id)
    {
        $this->validate($request, [
            'type_name' =>'required|min:1|max:255|',
        ]);

        $data = ([
            "type" => $this->model->show($type_id),
            "type_name" => $request->input("type_name"),
        ]);

        if($this->model->update($data, $type_id)){
            return redirect()->route("project.type.create")->with("success", "You Have Changed The Project Type Name From ". " ".
            $request->input('prev_name') ." ". " To " .$request->input("type_name"). " ". "Successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($type_id)
    {

        $type =  $this->model->show($type_id);
        $details= $type->type_name;

        if (($type->delete($type_id))AND ($type->trashed())) {
            return redirect()->back()->with([
                'success' => "You Have Deleted $details From The Vehicle Type Successfully",
            ]);
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use DB;
use App\{ProjectCategories};
use Illuminate\Support\Facades\Gate;

class ProjectCategoryController extends Controller
{
    protected $model;
    public function __construct(ProjectCategories $categories)
    {
       // set the model
       $this->middleware('auth');
       $this->model = new CategoryRepository($categories);
       $this->middleware(['role:Administrator|Admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProjectCategories::orderBy('category_name', 'asc')->get();
        return view("administrator.project_categories.index")->with([
            'categories' => $categories,
        ]);
    }

    public function bin()
    {
        $categories= ProjectCategories::onlyTrashed()->get();
        return view('administrator.project_categories.recyclebin')->with([
            'categories' => $categories,
        ]);
    }

    public function restore($category_id)
    {
        if (Gate::allows('Administrator', auth()->user())) {
            ProjectCategories::withTrashed()
            ->where('category_id', $category_id)
            ->restore();
            $typo= $this->model->show($category_id);
            $name = $typo->category_name;
            $email = auth()->user()->email;

            activity()
                ->performedOn($typo)
                ->causedBy(auth()->user()->id)
                ->withProperties([
                    'category_name' => $name,
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
            'category_name' =>'required|min:1|max:255|unique:project_categories',
        ]);

        $data = ([
            "category" => new ProjectCategories,
            "category_name" => $request->input("category_name"),
        ]);

        if($this->model->create($data)){
            return redirect()->route("project.category.create")->with("success", "You Have Added "
            .$request->input("category_name"). " To The Project category Successfully");
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

    public function edit($category_id)
    {

        $cate= $this->model->show($category_id);
        $categories= $this->model->all();
        return view('administrator.project_categories.edit')->with([
            'categories' => $categories,
            'cate' => $cate,
        ]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        $this->validate($request, [
            'category_name' =>'required|min:1|max:255|',
        ]);

        $data = ([
            "category" => $this->model->show($category_id),
            "category_name" => $request->input("category_name"),
        ]);

        if($this->model->update($data, $category_id)){
            return redirect()->route("project.category.create")->with("success", "You Have Changed The Project category Name From ". " ".
            $request->input('prev_name') ." ". " To " .$request->input("category_name"). " ". "Successfully");
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
    public function destroy($category_id)
    {
        $category =  $this->model->show($category_id);
        $details= $category->category_name;
        if (($category->delete($category_id))AND ($category->trashed())) {
            return redirect()->back()->with([
                'success' => "You Have Deleted $details From The Project Categories List Successfully",
            ]);
        }else{
            return redirect()->back()->with("error", "Network Failure");
        } 
    }
}

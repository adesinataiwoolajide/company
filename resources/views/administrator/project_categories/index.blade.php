@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('administrator.dashboard')}}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('project.category.create')}}"><i class="fa fa-cogs"></i> PROJECT CATEGORY</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('project.category.restore')}}"><i class="fa fa-trash-o"></i> BIN</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

        <!-- Main Content Area -->
    <div class="main-content dashboard-pt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Please fill the below form to add a new project category </p>
                            @include('partials._message')
                            <form action="{{route('project.category.save')}}" method="POST" enccategory="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <input category="text" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The Project category Name" required name="category_name">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('category_name'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button category="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('category_name') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4">
                                        <button category="submit" class="btn btn-rounded btn-outline-primary btn-block" name="">ADD THE PROJECT CATEGORY</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <p align="center">List of Saved Project Categories </p>
                            <table  id="basic-datatable" class="table-bordered table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Prohect Category Name</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Prohect Category Name</th>

                                    </tr>
                                </tfoot>

                                <tbody><?php
                                    $y=1; ?>
                                    @foreach($categories as $category)
                                        <tr>

                                            <td>{{$y}}
                                                <a href="{{route('project.category.delete', $category->category_id)}}" class="btn btn-danger" onclick="return(confirmToDelete());">
                                                <i class="fa fa-trash-o"></i>
                                                </a>
                                                <a href="{{route('project.category.edit', $category->category_id)}}" class="btn btn-success" onclick="return(confirmToEdit());">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                            <td>{{$category->category_name}}</td>

                                        </tr><?php $y++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>
@endsection

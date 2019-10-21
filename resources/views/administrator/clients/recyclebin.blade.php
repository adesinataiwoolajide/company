@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('administrator.dashboard')}}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('project.category.restore')}}"><i class="fa fa-trash-o"></i> BIN</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('project.category.create')}}"><i class="fa fa-cogs"></i> PROJECT CATEGORY</a></li>


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
                    @include('partials._message')
                    <div class="card">
                        <div class="card-body">
                            <p align="center">List of Deleted Project Categories </p>
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
                                                 @if (auth()->user()->hasPermissionTo('Restore Project type') OR
                                                    (Gate::allows('Administrator', auth()->user())))
                                                    <a href="{{route('project.category.undelete', $category->category_id)}}"
                                                        class="btn btn-success"
                                                        onclick="return(confirmToRestore());" >
                                                    <i class="fa fa-trash-o"></i> Restore</a>
                                                @endif
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

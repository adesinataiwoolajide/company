@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('administrator.dashboard')}}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('project.type.create')}}"><i class="fa fa-cogs"></i> PROJECT TYPES</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('project.type.restore')}}"><i class="fa fa-trash-o"></i> BIN</a></li>

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
                            <p>Please fill the below form to add a new project type </p>
                            @include('partials._message')
                            <form action="{{route('project.type.save')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <input type="text" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The Project Type Name" required name="type_name">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('type_name'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('type_name') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4">
                                        <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" name="">ADD THE PROJECT TYPE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <p align="center">List of Saved Project Types </p>
                            <table  id="basic-datatable" class="table-bordered table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Type Name</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Type Name</th>

                                    </tr>
                                </tfoot>

                                <tbody><?php
                                    $y=1; ?>
                                    @foreach($type as $types)
                                        <tr>

                                            <td>{{$y}}
                                                <a href="{{route('project.type.delete', $types->type_id)}}" class="btn btn-danger" onclick="return(confirmToDelete());">
                                                <i class="fa fa-trash-o"></i>
                                                </a>
                                                <a href="{{route('project.type.edit', $types->type_id)}}" class="btn btn-success" onclick="return(confirmToEdit());">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                            <td>{{$types->type_name}}</td>

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

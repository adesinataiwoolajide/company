@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('administrator.dashboard')}}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user.edit', $use->user_id)}}"><i class="fa fa-pencil"></i> EDIT USER</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user.create')}}"><i class="fa fa-users"></i> USERS</a></li>

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
                            <p>Please fill the below form to update the user </p>
                            @include('partials._message')
                            <form action="{{route('user.update', $use->user_id)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The Full Name" required name="name" value="{{$use->name}}">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('name') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="email" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The E-Mail" required name="email" value="{{$use->email}}">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('email') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-3">

                                        <select class="form-control form-control-rounded" name="role" required>
                                                <option value="{{$use->role}} ">{{$use->role}} </option>
                                            <option value=""> </option>

                                            @foreach($user_roles as $list_roles)
                                                <option value="{{$list_roles->name}}"> {{$list_roles->name}}  </option>
                                            @endforeach
                                        <select>
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('role'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('role') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="password" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The Passwword" name="password">
                                        <span style="color: green">** This Field is Optional **</span>
                                        @if ($errors->has('password'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('password') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" name="add_user">UPDATE THE USER</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <table  id="basic-datatable" class="table-bordered table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>

                                    </tr>
                                </tfoot>

                                <tbody><?php
                                    $y=1; ?>
                                    @foreach($user as $users)
                                        <tr>

                                            <td>{{$y}}
                                                <a href="{{route('user.delete', $users->user_id)}}" class="btn btn-danger" onclick="return(confirmToDelete());">
                                                <i class="fa fa-trash-o"></i>
                                                </a>
                                                <a href="{{route('user.edit', $users->user_id)}}" class="btn btn-success" onclick="return(confirmToEdit());">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{{$users->role}}</td>

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

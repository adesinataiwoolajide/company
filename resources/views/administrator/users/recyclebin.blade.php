@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('administrator.dashboard')}}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user.restore')}}"><i class="fa fa-trash-o"></i> BIN</a></li>
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
                                                <a href="{{route('user.undelete', $users->user_id)}}"
                                                    onclick="return(confirmToRestore());" class="btn btn-success">
                                                    <i class="fa fa-trash-o"></i>Restore
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

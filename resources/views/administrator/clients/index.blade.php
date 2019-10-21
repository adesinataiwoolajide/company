@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('administrator.dashboard')}}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('client.create')}}"><i class="fa fa-cogs"></i> CLIENTS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('client.restore')}}"><i class="fa fa-trash-o"></i> BIN</a></li>

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
                            <p>Please fill the below form to add a new client </p>
                            @include('partials._message')
                            <form action="{{route('client.save')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <input type="file" class="form-control form-control-rounded" id=""
                                        required name="client_logo">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('client_logo'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button client="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('client_logo') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The Client Name" required name="client_name">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('client_name'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button client="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('client_name') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                     <div class="form-group col-md-3">
                                        <input type="text" class="form-control form-control-rounded" id=""
                                        placeholder="Enter The Client URL" required name="client_url">
                                        <span style="color: red">** This Field is Required **</span>
                                        @if ($errors->has('client_url'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button client="button" class="close" data-dismiss="alert">&times;</button>
                                                <div class="alert-icon contrast-alert">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="alert-message">
                                                    <span><strong>Error!</strong> {{ $errors->first('client_url') }} !</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4">
                                        <button client="submit" class="btn btn-rounded btn-outline-primary btn-block" 
                                        name="">ADD THE CLIENT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <p align="center">List of Saved Clients </p>
                            <table  id="basic-datatable" class="table-bordered table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Client Logo</th>
                                        <th>Client Name</th>
                                        <th>Client URL</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>S/N</th>
                                        <th>Client Logo</th>
                                        <th>Client Name</th>
                                        <th>Client URL</th>
                                    </tr>
                                </tfoot>

                                <tbody><?php
                                    $y=1; ?>
                                    @foreach($client as $clients)
                                        <tr>

                                            <td>{{$y}}
                                                <a href="{{route('client.delete', $clients->client_id)}}" class="btn btn-danger" onclick="return(confirmToDelete());">
                                                <i class="fa fa-trash-o"></i>
                                                </a>
                                                <a href="{{route('client.edit', $clients->client_id)}}" class="btn btn-success" onclick="return(confirmToEdit());">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                            <td>{{$clients->client_name}}</td>
                                            <td>{{$clients->client_logo}}</td>
                                            <td>{{$clients->client_url}}</td>

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

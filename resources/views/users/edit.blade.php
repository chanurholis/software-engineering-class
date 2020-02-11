@extends('layouts.main')

@section('title','RPL | CREATE')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="/User/{{$user->id}}" method="post">
                        @method('patch')
                        @csrf

                        <div class="box-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" id="name" placeholder="Enter name" autofocus>
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" id="email" placeholder="Enter email">
                                @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update</button>
                        </div>

                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection
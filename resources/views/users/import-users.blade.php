@extends('layouts.main')

@section('title','RPL | IMPORT')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Create
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
                    <form action="/Create/user/import" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="file">File Excel</label>
                                <input type="file" class="form-control" name="file" id="file">
                                @error('file')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
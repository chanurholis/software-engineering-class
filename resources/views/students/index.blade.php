@extends('layouts.main')

@section('title','RPL | HOME')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Student</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            {{session('status')}}
        </div>
        @endif

        @if ($student)
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">   

                            <table id="example2" class="table table-bordered table-striped table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($student as $s)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$s->student_name}}</td>
                                        <td class="text-center"><span class="label label-success">Active</span></td>
                                    <td class="text-center"><a href="/User/{{$s->student_id}}" class="label label-info">Detail</a> <a href="/User/{{$s->student_id}}/edit" class="label label-primary">Update</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>

                        </div>

                        <br>

                        <div class="box-body table-responsive no-padding">

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        @else
        {{'EMPTY'}}
        @endif

    </section>
    <!-- /.content -->

@endsection

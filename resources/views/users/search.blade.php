@extends('layouts.main')

@section('title','RPL | HOME')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Home
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

        @if ($user)
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>
                        <div class="box-tools">
                        <form action="{{''}}" method="post">
                            @method('post')
                            @csrf
                            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">    
                            <table id="example2" class="table table-bordered table-striped table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Since</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->created_at}}</td>
                                        <td class="text-center"><span class="label label-success">Active</span></td>
                                        <td class="text-center"><a href="" class="label label-info">Detail</a> <a href="" class="label label-primary">Update</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            {{$user->links()}}
                        </ul>
                    </div>
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
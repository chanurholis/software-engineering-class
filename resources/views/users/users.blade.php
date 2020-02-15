@extends('layouts.main')

@section('title','RPL | USERS')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
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

        @if ($user)
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="/User/export" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export</a>
                        <div class="box-tools">
                        <form action="/User" method="post">
                            @method('post')
                            @csrf
                            <div class="input-group input-group-sm hidden-xs" style="width: 200px; margin-top: 5px;">
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
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$u->name}}</td>
                                        <td class="text-center"><span class="label label-success">Active</span></td>
                                    <td class="text-center"><a href="/User/{{$u->id}}" class="label label-info">Detail</a> <a href="/User/{{$u->id}}/edit" class="label label-primary">Update</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>

                        </div>

                        <br>

                        <div class="box-body table-responsive no-padding">   

                            <table id="example2" class="table table-bordered table-striped table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Page</th>
                                        <th class="text-center">Users</th>
                                        <th class="text-center">Data Perpage</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td class="text-center">{{$user->currentPage()}}</td>
                                        <td class="text-center">{{$user->total()}}</td>
                                        <td class="text-center">{{$user->perPage()}}</td>
                                    </tr>
                                <tbody>

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

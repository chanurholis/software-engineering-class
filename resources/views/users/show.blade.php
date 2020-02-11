@extends('layouts.main')

@section('title','RPL | SHOW')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Show
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
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th>Since</th>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Last Update</th>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td>
                                <form action="/User/{{$user->id}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{$user->id}}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update</a>
                                    <button onclick="return confirm('Sure?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @else
            <h1 class="text-center">{{'Empty'}}</h1>
        @endif

    </section>
    <!-- /.content -->

@endsection
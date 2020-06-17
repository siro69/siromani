@extends('layout.master')
@section('title', 'Users')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/charts-c3/plugin.css')}}" />
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}" />
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
{{--                <div class="header">--}}
{{--                    <h2><strong>Basic Table</strong></h2>--}}
{{--                    <ul class="header-dropdown">--}}
{{--                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                <li><a href="javascript:void(0);">Action</a></li>--}}
{{--                                <li><a href="javascript:void(0);">Another action</a></li>--}}
{{--                                <li><a href="javascript:void(0);">Something else</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="remove">--}}
{{--                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="body">
{{--                    <p>Basic example without any additional modification classes</p>--}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>USERNAME</th>
                                <th>Email</th>
                                <th>User Privilages</th>
                                <th>User Types</th>
                                <th>Created At</th>
                                <th>Branch</th>
                                <th>Status</th>
                                <th>Recruiter Details</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->user_types }}</td>
                                <td>{{ $user->created_on }}</td>
                                <td>{{ $user->branch }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->recuriter_details }}</td>
                                <td>
                                    {{-- @can('role-edit') --}}
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit',$user->id) }}">Edit</a>
                                    {{-- @endcan --}}
                                    {{-- @can('role-delete') --}}
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('del', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    {{-- @endcan --}}</td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <div class="text-md-center">
                            {{ $data->render() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

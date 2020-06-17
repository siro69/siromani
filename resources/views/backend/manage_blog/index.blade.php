@extends('layout.master')
@section('title', 'Manage Blog')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

        </div>
        @can('BlogCategories-create')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('admin.manage_blog.create') }}"> Create New Blog Categories</a>
        </div>
        @endcan
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

            <div class="body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Category Title</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogcategories as $data)

                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->created_on }}</td>
                            <td>
                                @if ($data->status == 1)
                                    Active
                                @else
                                    Offline
                                @endif
                            </td>
                            <td style="width: 150px;">
                                <form action="{{ route('manage_blog.destroy',$data->id) }}" method="POST">



                                    <a class="btn btn-primary" href="{{ route('manage_blog.edit',$data->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')


                                    <button type="submit" class="btn btn-danger">Del</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <div class="text-center">
                            {{ $blogcategories->render() }}
                        </div>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{!! $blogcategories->links() !!}
@endsection

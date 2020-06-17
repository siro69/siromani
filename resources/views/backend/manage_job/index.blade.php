@extends('layout.master')
@section('title', 'Manage Job')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
           
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('admin.jobs.create') }}"> Create New Job</a>
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

            <div class="body">
                <div class="table-responsive">
                    {{ $jobs->render() }}
                    <table class="table">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Group Job</th>
                            <th>Employer</th>
                            <th>Job Title</th>
                            <th>Posted Date</th>
                            <th>Job Posting Data</th>
                            <th>Status/Expiry Data</th>
                            <th>Permium</th>
                            <th>Hot</th>
                            <th>Recent</th>
                            <th>Free</th>
                            <th>Aproval</th>
                            <th>Office Link</th>
                            <th style="width: 50px;">Actions</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->group_job }}</td>
                            <td></td>
                            <td>{{ $data->job_title }}</td>
                            <td>{{ $data->created_on }}</td>

                            <td></td>
                            <td></td>
                            <td>{{ $data->premium }}</td>
                            <td>{{ $data->hot }}</td>
                            <td>{{ $data->recent }}</td>
                            <td>{{ $data->free }}</td>
                            <td>{{ $data->approval }}</td>
                            <td>{{ $data->office_link }}</td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $jobs->render() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@extends('layout.master')
@section('title', 'Manage JobSeekers')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Id</td>
                               <th>Name</th>
                                <th>Image</th>
                                <th>View CV</th>
                                <th>Job Perferences</th>
                                <th>Expected Salary</th>
                                <th>Created Date</th>
                                <th>Last Login</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobseeker as $data)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $data->first_name }} {{ $data->last_name }}</td>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

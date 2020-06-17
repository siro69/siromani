@extends('layout.master')
@section('title', 'Manage Blog')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
    <!-- Input -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12 ">
                            <form method="POST" action="{{route('admin.users.store')}}">
                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="firstname">FirstName</label>
                                    <input type="text" id="firstname" name="first_name" class="form-control" placeholder="firstname"  autocomplete="new-password"/>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="lastname">LastName</label>
                                    <input type="text" id="lastname"  name="last_name" class="form-control" placeholder="firstname"  autocomplete="new-password"/>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group ">
                                    <label for="username">Username/DisplayName</label>
                                    <input id="username"  name="username" type="text" class="form-control" placeholder="Username" autocomplete="new-email" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Password"  autocomplete="new-password"/>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group ">
                                    <label for="email">Email</label>
                                    <input id="email"  name="email" type="email" class="form-control" placeholder="Username" autocomplete="new-email" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group ">
                                    <label for="phone">Phone</label>
                                    <input id="phone"  name="phone" type="text" class="form-control" placeholder="Username" autocomplete="new-email" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="form-group ">
                                    <label for="branch">Branch</label>
                                    <input id="branch"  name="branch" type="text" class="form-control" placeholder="Username" autocomplete="new-email" />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="lastname">Role</label>
                                <select class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role}}">{{$role}}</option>

                                    @endforeach
                                </select>
                            </div>




                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Textarea -->

@stop
@section('page-script')
    <script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/basic-form-elements.js')}}"></script>
@stop

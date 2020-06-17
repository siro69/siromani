
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
                            <form method="POST" action="{{route('admin.manage_blog.store')}}">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="title">Category Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Category Title"  autocomplete="new-password"/>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="form-group">
                                        <label for="keywords">Meta Keywords</label>
                                        <input type="text" id="keywords"  name="meta_keywords" class="form-control" placeholder=" keywords"  autocomplete="new-password"/>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="form-group ">
                                        <label for="descriptions">Meta Descriptions</label>
                                        <input id="descriptions"  name="meta_descriptions" type="text" class="form-control" placeholder="descriptions" autocomplete="new-email" />
                                    </div>
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

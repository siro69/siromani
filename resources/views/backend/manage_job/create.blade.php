@extends('layout.master')
@section('title', 'Manage Blog')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
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
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Select Employer:</strong>
                                    {!!  Form::select('animal',['L' => 'Large', 'S' => 'Small'],null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')); !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong> Category :</strong>
                                    {!!  Form::select('animal',['L' => 'Large', 'S' => 'Small'],null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')); !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Location :</strong>
                                    {!!  Form::select('animal',['L' => 'Large', 'S' => 'Small'],null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')); !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Type:</strong>
                                    {!!  Form::select('animal',['L' => 'Large', 'S' => 'Small'],null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')); !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Province No :</strong>
                                    {!!  Form::select('animal',['L' => 'Large', 'S' => 'Small'],null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')); !!}            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Level :</strong>
                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Number of Openings:</strong>
                                    {!! Form::text('title', null, array('placeholder' => 'Category Title','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Salary:</strong>
                                    {!! Form::textarea('', null, array('placeholder' => 'Category Title','class' => 'form-control', 'id' => 'summernote' )) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Post Form:</strong>
                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Expiry Date:</strong>
                                    {!! Form::text('meta_keywords', null, array('placeholder' => 'Meta Keywords','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Education Required:</strong>
                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Experience Required:</strong>
                                    {!! Form::text('title', null, array('placeholder' => 'Category Title','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Please Check the box to provide jobseeker with given restriction while applying for the job:</strong>
                                    {!! Form::text('meta_keywords', null, array('placeholder' => 'Meta Keywords','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Add or remove tags:</strong>
                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Title:</strong>

                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Description:</strong>

                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Specification:</strong>

                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Job Apply Option:</strong>

                                    {!! Form::text('meta_descriptions', null, array('placeholder' => 'Meta Descriptions','class' => 'form-control')) !!}
                                </div>
                            </div>

                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <a class="btn btn-primary" href="{{ route('admin.jobs.index') }}"> Cancel</a>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
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
    <script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@stop

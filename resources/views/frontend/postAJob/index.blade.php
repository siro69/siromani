@extends('layout.frontend.app')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/postAJob/postajob.css?v=12345678') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/postAJob/createaccount.css?v=12345678') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/postAJob/postjob.css?v=12345678') }}" />
@stop
@section('content')
    @include('frontend.postAJob.postjob')
@stop

@section('page-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <script src="{{asset('assets/js/frontend/postAJob/post.js')}}"></script>
@stop

@extends('layout.frontend.app')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/company/mystyle.css?v=12345678') }}"/>

@stop
@section('content')
    @include('frontend.homepage.contact')
@stop

@section('page-script')
    <script src="{{asset('assets/js/frontend/blogs/sidenav.js')}}"></script>
@stop

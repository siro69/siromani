@extends('layout.frontend.app')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/blogs/blogs.css?v=12345678') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/blogs/style.css?v=12345678') }}" />

@stop
@section('content')
    @include('frontend.blogs.blogs')
@stop

@section('page-script')

@stop

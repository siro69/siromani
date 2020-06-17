@extends('layout.frontend.app')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/homepage/home.css?v=12345678') }}"/>

@stop
@section('content')
    @include('frontend.homepage.contact')
@stop


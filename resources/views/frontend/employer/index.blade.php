@extends('layout.frontend.app')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/employer/employer.css?v=12345678') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/emplyer/dashboard.css') }}" />

@stop
@section('content')
    @include('frontend.employer.mainindex.index')
@stop

@section('page-script')
@stop

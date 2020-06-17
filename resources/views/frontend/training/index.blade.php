@extends('layout.frontend.app')
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/training/training.css?v=12345678') }}" />

@stop
@section('content')
    @include('frontend.training.training-course')
@stop

@section('page-script')

@stop

@extends('layout.app')

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route('userEmployer') }}">Add a Employer"></a>
    </div>
</div>

<div class="card">
    <div class="card-body">
       <a href="{{ route('userJobSeeker') }}">Add a JobSeeker"></a>
    </div>
</div>
@endsection

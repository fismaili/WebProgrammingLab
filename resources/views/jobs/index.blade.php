@extends('layout') 
@section('content')
<h1>{{ $title }}</h1>

@forelse($jobs as $job)
<li>{{ $job }}</li>
@empty
<li>No Jobs Found</li>
@endforelse 
@endsection
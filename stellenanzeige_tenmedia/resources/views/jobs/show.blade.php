@extends('layout')

@section('content')
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->description }}</p>
    <p>Requirements: {{ $job->requirements }}</p>
    <p>Category: {{ $job->category->name }}</p>
    <p>Company: {{ $job->company->name }}</p>
@endsection

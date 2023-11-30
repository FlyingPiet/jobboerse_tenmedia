@extends('layouts.app')

@section('content')
    <h1>{{ isset($job) ? 'Edit Job' : 'Create Job' }}</h1>

    @if(isset($job))
        <form method="POST" action="{{ route('jobs.update', $job) }}">
        @method('PUT')
    @else
        <form method="POST" action="{{ route('jobs.store') }}">
    @endif
        @csrf

        <!-- Formularelemente für die Job-Daten -->

        <button type="submit">{{ isset($job) ? 'Update Job' : 'Create Job' }}</button>
    </form>
@endsection

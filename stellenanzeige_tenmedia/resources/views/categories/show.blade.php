@extends('layout')

@section('content')
    <div class="container">
        <h1 class="display-4 fw-bold mt-5">{{ $category->name }}</h1>
        <hr>
        <p>Description: {{ $category->description }}</p>

        <h2 class="fw-bold">Jobs in {{ $category->name }}:</h2>
        @if($category->jobs->count() > 0)
            <ul>
                @foreach($category->jobs as $job)
                    <li><a href="{{ route('jobs.show', $job) }}" class="link-dark fs-4">{{ $job->title }}</a></li>
                @endforeach
            </ul>
        @else
            <p>No jobs available in this category.</p>
        @endif
        <a href="/categories">
            <img class="arrow" src="/images/arrow.png" alt="Pfeil" />
        </a>
    </div>
@endsection

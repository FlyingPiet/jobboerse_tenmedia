@extends('layout')

@section('content')
    <div class="container">
        <h1 class="display-4 fw-bold mt-5">{{ $category->name }}</h1>
        <hr>
        <p class="my-1 mx-5 px-3 lh-1"><span class="fw-bold">Description: </span> {{ $category->description }}</p>

        <h2 class="my-2 mx-5 px-3 lh-1 fw-bold">Jobs in {{ $category->name }}:</h2>
        @if($category->jobs->count() > 0)
            <ul class="my-1 mx-5 px-3 lh-1">
                @foreach($category->jobs as $job)
                    <li><a href="{{ route('jobs.show', $job) }}" class="link-dark fs-4">{{ $job->title }}</a></li>
                @endforeach
            </ul>
        @else
            <p class="my-2 mx-5 px-3 lh-1">No jobs available in this category.</p>
        @endif
        <a href="/categories">
            <img class="arrow" src="/images/arrow.png" alt="Pfeil" />
        </a>
    </div>
@endsection

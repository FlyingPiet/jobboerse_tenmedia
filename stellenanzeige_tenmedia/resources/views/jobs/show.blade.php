@extends('layout')

@section('content')
    <div class="container">
        <h1 class="display-4 fw-bold mt-5">{{ $job->title }}</h1>
        <hr>
        <p class="my-1 mx-5 px-3 lh-1"><span class="fw-bold">Description: </span>{{ $job->description }}</p>
        <p class="my-1 mx-5 px-3 lh-1"><span class="fw-bold">Requirements: </span> {{ $job->requirements }}</p>
        <p class="my-1 mx-5 px-3 lh-1"><span class="fw-bold">Category: </span> {{ $job->category->name }}</p>
        <p class="my-1 mx-5 px-3 lh-1"><span class="fw-bold">Company: </span> <a
                href="{{ route('companies.show', $job->company) }}" class="link-dark">{{ $job->company->name }}</a></p>
        <p class="my-1 mx-5 px-3 lh-1"><span class="fw-bold">Company Address: </span> {{ $job->company->address }}</p>
        <a href="/jobs">
            <img class="arrow" src="/images/arrow.png" alt="Pfeil" />
        </a>
    </div>
@endsection

@extends('layout')

@section('content')
    <div class="container">
        <h1 class="display-4 fw-bold mt-5">{{ $company->name }}</h1>
        <hr>
        <p><span class="fw-bold">Description::</span> {{ $company->description }}</p>
        <p><span class="fw-bold">Address:</span> {{ $company->address }}</p>
        <p><span class="fw-bold">Industry:</span> {{ $company->industry }}</p>
        <a href="/companies">
            <img class="arrow" src="/images/arrow.png" alt="Pfeil" />
        </a>
    </div>
@endsection

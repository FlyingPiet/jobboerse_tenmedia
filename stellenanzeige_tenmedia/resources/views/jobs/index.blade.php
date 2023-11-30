@extends('layout')

{{-- @section('content')
    <h1 class="display-4 fw-bold mt-5">Job Listings</h1>
    <hr>
    <ul class="list-group fs-4">
        @foreach ($jobs as $job)
            <li class="list-group-item mb-1">
                <div class="d-flex bd-highlight align-items-center">
                    <a href="{{ route('jobs.show', $job) }}" class="flex-grow-1 bd-highlight link-dark">{{ $job->title }}</a>                   
                    <span class="px-2 bd-highlight">{{ $job->company->name }}</span>
                </div>
            </li>
        @endforeach
    </ul>
@endsection --}}

@section('content')
    <h1 class="display-4 fw-bold mt-5">Job Listings</h1>
    <hr>
    <table class="table table-bordered table-hover mt-4 fs-3 ">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Company</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="fs-4">
            @foreach ($jobs as $job)
                <tr>
                    <td>
                        <a href="{{ route('jobs.show', $job) }}" class="link-dark">{{ $job->title }}</a>
                    </td>
                    <td>{{ $job->company->name }}</td>
                    <td>
                        {{-- wird später integriert --}}
                        
                        {{-- <a href="{{ route('jobs.edit', $job) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('jobs.destroy', $job) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
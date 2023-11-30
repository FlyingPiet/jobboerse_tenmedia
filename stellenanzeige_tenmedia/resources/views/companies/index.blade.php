@extends('layout')

@section('content')
    <h1 class="display-4 fw-bold mt-5">Company List</h1>
    <hr>
    <div class="container">
    <table class="table table-bordered table-hover mt-4 fs-3 ">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Industry</th>
                <th scope="col">Number of Jobs</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>
                        <a href="{{ route('companies.show', $company) }}" class="link-dark">
                            {{ $company->name }}
                        </a>
                    </td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->industry }}</td>
                    <td class="text-center">{{ $company->jobs->count() }}</td>
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
    </table></div>
@endsection
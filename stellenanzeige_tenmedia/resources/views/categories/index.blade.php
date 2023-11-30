@extends('layout')

@section('content')
    <h1 class="display-4 fw-bold mt-5">Job Categories</h1>
    <hr>
    <table class="table table-bordered table-hover mt-4 fs-3">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Number of Jobs</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        <a href="{{ route('categories.show', $category) }}" class="link-dark">
                            {{ $category->name }}
                        </a>
                    </td>
                    <td>{{ $category->description }}</td>
                    <td class="text-center">{{ $category->jobs->count() }}</td>
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
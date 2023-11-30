<!-- resources/views/users/index.blade.php -->

@extends('layout')
@section('title','User')

@section('content')
    <h1 class="display-4 fw-bold mt-5">User</h1>
    <hr>
    {{-- <ul>
        @foreach($users as $user)
            <li><a href="{{ route('users.show', $user) }}">{{ $user->username }}</a></li>
        @endforeach
    </ul> --}}
@endsection

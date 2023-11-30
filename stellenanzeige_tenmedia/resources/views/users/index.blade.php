<!-- resources/views/users/index.blade.php -->
!
@extends('layout')
@section('title','User')

@section('content')
    <h1>User List</h1>
    <ul>
        @foreach($users as $user)
            <li><a href="{{ route('users.show', $user) }}">{{ $user->username }}</a></li>
        @endforeach
    </ul>
@endsection

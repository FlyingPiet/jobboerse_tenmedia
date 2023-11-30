<!-- resources/views/users/show.blade.php -->

@extends('layout')

@section('content')
    <h1>{{ $user->username }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->role }}</p>
@endsection

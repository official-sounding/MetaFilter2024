@extends('layouts.email')

@section('title', $title ?? 'Untitled')

@section('contents')
    <p>Hello, {{ $user->username }}</p>

    <p>Welcome to MetaFilter. To complete your signup, please confirm your email address.</p>
@endsection

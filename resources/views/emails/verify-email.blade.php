@extends('layouts.email')

@section('title', $title ?? 'Untitled')

@section('contents')
    <p>Hello, <strong>{{ $user->username }}</strong></p>

    <p>Welcome to MetaFilter. To complete your signup, please confirm your email address.</p>

    <a class="email-button" href="#">Confirm (not implemented yet)</a>
@endsection

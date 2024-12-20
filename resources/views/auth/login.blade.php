@extends('layouts.guest')

@section('title', $title ?? 'Untitled')

@section('contents')
    @include('forms.auth.login-form')
@endsection

@section('sidebar')
@endsection

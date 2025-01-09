@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @include('forms.auth.forgot-password-form')
@endsection

@section('sidebar')
@endsection

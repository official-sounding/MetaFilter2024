@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @include('forms.auth.reset-password-form')
@endsection

@section('sidebar')
@endsection

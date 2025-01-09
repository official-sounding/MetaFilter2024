@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @include('forms.auth.confirm-password-form')
@endsection

@section('sidebar')
@endsection

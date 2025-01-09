@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @include('forms.auth.verify-email-form')
@endsection

@section('sidebar')
@endsection

@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    @include('auth.register')
@endsection

@section('sidebar')
@endsection

@extends('layouts.errors')

@section('title', trans('Not Found'))
@section('code', '404')
@section('message', trans('Not Found'))

@push('styles')
    <style>
        body {
            background-image: url('/images/backgrounds/travolta-pulp-fiction.gif');
            background-position: left bottom;
            background-repeat: no-repeat;
            width: 100%;
        }
    </style>
@endpush

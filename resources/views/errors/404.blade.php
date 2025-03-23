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

        main {
            animation: fadeIn 15s;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
@endpush

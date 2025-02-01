@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    bugs index
    <x-filament-issues />
@endsection

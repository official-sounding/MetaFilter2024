@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <livewire:tables.member-table />
@endsection

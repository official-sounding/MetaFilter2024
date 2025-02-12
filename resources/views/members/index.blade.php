@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <livewire:members.member-search-component />
@endsection

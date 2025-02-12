@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <p>{{ trans('Thanks for contacting us') }}</p>
@endsection

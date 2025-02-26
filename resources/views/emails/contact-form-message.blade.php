@extends('layouts.email')

@section('title', $title ?? 'Untitled')

@section('contents')
    <p>Hi. {{ $dto->name }} ({{ $dto->email }}) sent a contact message:</p>

    <blockquote>
        <p>{{ $dto->subject }}</p>

        {{ $dto->message }}
    </blockquote>
@endsection

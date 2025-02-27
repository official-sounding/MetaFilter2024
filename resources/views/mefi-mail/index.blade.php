@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @forelse ($emails as $email)
        {{ $email->subject }}<br>
    @empty
        @include('notifications.none-listed', [
            'records' => 'MeFi mails'
        ])
    @endforelse
@endsection

@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @forelse ($contacts as $contact)
        contacts
    @empty
        @include('notifications.none-listed', [
            'records' => 'contacts'
        ])
    @endforelse
@endsection

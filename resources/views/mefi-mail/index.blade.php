@extends('layouts.app')

@section('title', $title ?? 'Untitled')

@section('contents')
    @if (count($emails) > 0)
        <livewire:tables.mefi-mail-table-component />
    @else
        @include('notifications.none-listed', [
            'records' => 'MeFi mails'
        ])
    @endif
@endsection

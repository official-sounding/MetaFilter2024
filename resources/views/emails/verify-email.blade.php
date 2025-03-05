@extends('layouts.email')

@section('title', $title ?? 'Untitled')

@section('contents')
    <x-email.html-email-paragraph-component>
        <b style='color: #033d63;'>{{ $user->username }}</b>
    </x-email.html-email-paragraph-component>

    <x.email.html-email-paragraph-component>
        Welcome to MetaFilter! To complete your signup, please verify your email address.
    </x.email.html-email-paragraph-component>

    <x.email.html-email-button-component url="{{ $url }}">
        Verify Email (not implemented yet)
    </x.email.html-email-button-component>
@endsection

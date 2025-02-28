@extends('layouts.app')

@section('title', $title ?? trans('Untitled'))

@section('contents')
    @include('forms.mefi-mail.mefi-mail-form', [
        'formId' => 'site-footer-search-form'
    ])
@endsection

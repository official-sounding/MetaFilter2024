@extends('layouts.minimal')

@section('title', $title ?? 'Untitled')

@section('contents')
    <x-slot name="header">
        <h2>
            {{ trans('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div>
            <div>
                <div>
                    @include('members.partials.update-profile-information-form')
                </div>
            </div>

            <div>
                <div>
                    @include('members.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
@endsection

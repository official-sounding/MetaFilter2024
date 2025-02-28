@extends('layouts.app')

@section('title', $title ?? trans('Untitled'))

@section('contents')
    <table>
        <tbody>
            <tr>
                <th scope="row">
                    {{ trans('From') }}
                </th>
                <td>
                    <address>
                        <x-members.profile-link-component :user="$mail->sender" />
                    </address>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    {{ trans('Date') }}
                </th>
                <td>
                    <x-dates.formatted-date-time-component :date="$mail->created_at" format="g:i a" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    {{ trans('Subject') }}
                </th>
                <td>
                    {{ $mail->subject }}
                </td>
            </tr>
            <tr>
                <th scope="row">
                    {{ trans('Message') }}
                </th>
                <td>
                    {{ $mail->message }}
                </td>
            </tr>
        </tbody>
    </table>
@endsection

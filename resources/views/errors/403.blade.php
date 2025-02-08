@extends('layouts.errors')

@section('title', trans('Forbidden'))
@section('code', '403')
@section('message', trans($exception->getMessage() ?: 'Forbidden'))

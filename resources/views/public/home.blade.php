@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="nunito-font">
        <div class="d-flex flex-column justify-content-center align-items-center gap-3">
            <span class="text-primary-3">مرحبا بكم في</span>
            <span class="text-primary-1">قطرة غيث</span>
            <span class="text-primary-1">i will design this page later</span>
        </div>
    </h1>
@endsection

@push('styles')
    <style>
        body {
            background-color: var(--secondary-2);
        }
    </style>
@endpush
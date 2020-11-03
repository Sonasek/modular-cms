<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('modular-admin::login.layout.head')
</head>
<body>
    @if(session()->get('message'))
        <p class="alert {{ session()->getName('alert-class', 'alert-info') }}">{{ session()->getName('message') }}</p>
    @endif
    @include('modular-admin::login.layout.middle')
    @livewireScripts
</body>
</html>


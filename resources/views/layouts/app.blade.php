<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pub.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('toast/jquery.toast.min.css') }}"> -->

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        @toastr_css
    </head>
    <body>
        
        <!-- Page Content -->
        {{ $slot }}
        
    </body>
    @jquery
    @toastr_js
    @toastr_render
    <script src="{{ asset('js/mypage.js') }}"></script>
</html>

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
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('toast/jquery.toast.min.css') }}"> -->
        @toastr_css
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
        <script src="{{ asset('js/mypage.js') }}"></script>
        <!-- <script src="{{ asset('toast/jquery.toast.min.js') }}"></script> -->
    </head>
    <body>
        
        <!-- Page Content -->
        {{ $slot }}
        
    </body>
    @jquery
    @toastr_js
    @toastr_render
</html>

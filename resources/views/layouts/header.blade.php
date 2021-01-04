<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon icon -->
        <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- General CSS -->
        <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

        <!-- Template CSS -->
        <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">
        
        @yield('style')
    </head>
    <body>
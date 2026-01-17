@extends('layouts.app');

    @section('style')

        <link href="{{ asset('css/superStyle.css') }}" rel="stylesheet">

    @endsection

    @section('top-nav-bar-menu')
        
    @include('layouts.super-menu')

    @endsection

    @section('content')

    @include('layouts.sidebar-right')

    @endsection

    @section('js-files')

    <script src="{{ asset('assets\js\views\superjs\super-app.js') }}"></script>

    @endsection

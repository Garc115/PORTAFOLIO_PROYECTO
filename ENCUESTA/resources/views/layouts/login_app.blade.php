<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIGP</title>
	<link rel="shortcut icon" href="{{ asset('images/logo_sspc.png') }}" />

	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('twbs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

	@yield('style')

</head>

<!--<body style="height: 100%;width:100%; background-image: url('images/login.jpg'); background-size: cover;">-->
<body style="font-family:Titillium Web;">

	@yield('content')

	@yield('js-files')

</body>
</html>

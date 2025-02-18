<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ \App\Models\Setting::get('app_name') ?? config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/jpg" href="{{ asset( 'assets/img/logo_empire2.jpg' ) }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
     
    <link rel="stylesheet" href="{{ asset( 'assets/plugins/fontawesome-free/css/all.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'assets/dist/css/adminlte.min.css' ) }}"> 
    <!-- Bootstrap 4 RTL -->
    <link rel="stylesheet" href="{{ asset( 'assets/dist/css/bootstrap-rtl.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'assets/dist/css/rtl.css' ) }}">
    <link rel="stylesheet" href="{{ asset( 'assets/dist/css/custom.css' ) }}">    
    @yield('css')
    @livewireStyles
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
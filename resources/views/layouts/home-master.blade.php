<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicación de Gestion de Ventas</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">

    <style>
        
    </style>
</head>
<body>
    
    @include('layouts.partials.auth-navbar')
    <main class="form-container">
        @yield('content')
    </main>
    @include('layouts.partials.footer')
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}">

    </script>
</body>
</html>
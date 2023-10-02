<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">

    <style>
        body{
            width: 100%;
            height: 100vh;
            background-color: #f8f9fa;

        }
        .form-container{
            width: 450px;
            margin: 0 auto; /* Esto centrará el contenedor horizontalmente */
            margin-top: 30px; /* Puedes ajustar la distancia desde la parte superior */
            background-color: #fff; /* Agrega un fondo al contenedor */
            padding: 20px; /* Agrega relleno para espaciar el contenido */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Agrega una sombra para resaltar el contenedor */
        }
        .btn-custom-color1 {
    background-color: green;
    color: #fff; 

}.btn-custom-color1:hover {

    color:grey; 

}
.btn-custom-color2 {
    background-color: #ff0000; 
    color: #fff; 
    
}
.btn-custom-color2:hover {

color: yellow;

}
    </style>
</head>
<body>
    
    @include('layouts.partials.auth-navbar')
    <main class="form-container">
        @yield('content')
    </main>
   
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}">

    </script>
    
</body>
</html>
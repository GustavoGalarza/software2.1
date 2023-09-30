

@extends('layouts.auth-master')

@section('content')

    <form action="/register" method="POST">
        @csrf
        <h1>Creacion de cuenta</h1>
        @include('layouts.partials.messages')   
        <div class=" form-floating mb-3">
          <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>  
        <div class=" form-floating mb-3">
          <input type="text" name="username" placeholder="Username" class="form-control" id="exampleInputPassword1">
          <label for="exampleInputPassword1" class="form-label">Username</label>
        </div>
        <div class=" form-floating mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
          </div>
          <div class=" form-floating mb-3">
             <input type="password" placeholder="Password confirmation" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
          </div>

        <div class="">
            <p>Ya tienes una cuenta?<a href="/login"> Inicia sesion</a></p>
          </div>
        <button type="submit" class="btn btn-primary">Registrar Usuario</button>
      </form>
    @endsection 
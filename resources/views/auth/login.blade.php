
@extends('layouts.auth-master')

  @section('content')
      <form action="/login" method="POST">
          @csrf
          <h1>Login</h1>
          @include('layouts.partials.messages')    
          <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
          </div>
          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="show-password">
            <input type="checkbox" id="showPassword">Mostrar</div>
          <div class="mb-2">
            <p>No tienes una cuenta?<a href="/register"> Registrate aqui</a></p>
          </div>
          <button type="submit" class="btn btn-primary mb-2">Iniciar Sesion</button>
          
          <div class="d-flex justify-content-between ">
            <a href="/auth/github" class="btn btn-custom-color1">
                <i class="fab fa-github"></i> Iniciar con GitHub
            </a>
            <a href="/auth/google" class="btn btn-custom-color2 ">
                <i class="fab fa-google"></i> Iniciar con Google Drive
            </a>
        </div>
        </form>
        <script>
          document.addEventListener('DOMContentLoaded', function () {
              var passwordInput = document.getElementById('exampleInputPassword1');
              var showPasswordCheckbox = document.getElementById('showPassword');
  
              showPasswordCheckbox.addEventListener('change', function () {
                  passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
              });
          });
      </script>
  @endsection
    


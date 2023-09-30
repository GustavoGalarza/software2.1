<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">Gestion de ventas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Proveedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Ventas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Imprimir</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <ul class="navbar-nav me-5 mb-2 mb-lg-0">
           @auth
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->name ?? auth()->user()->username}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Información</a></li>
                <li><a class="dropdown-item" href="#">Configuración</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>
              </ul>
            </li>
           @endauth
            
            <li class="nav-item">
              <a class="nav-link disabled"></a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
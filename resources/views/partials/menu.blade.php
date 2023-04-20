<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">Laravel</a>
      <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="clients">Clientes</a>
                    </li>
                    @role('admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="users">Usuarios</a>
                    </li>
                    @endrole
                </ul>
            </div>
            @auth
            
            <a style="color: white" disabled>Hola {{ auth()->user()->name }}.  </a>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-dark" type="submit">Cerrar sesión</button>
            </form>
            @endauth    
    </div>
</nav>

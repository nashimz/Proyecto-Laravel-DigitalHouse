


<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="/">
        <img src="./images/bolsa-de-la-compra.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        FRAVEGO
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link " href="/productos">Productos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/faq">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto </a>
            </li>


           {{-- @if(Auth::user()['email'] == 'admin@fravego.com') --}}
            <li class="nav-item">
                <a class="nav-link" href="/panel">Panel de Administracion</a>
            </li>
          {{-- @endif --}}



            <!---->


        </ul>
        <form class="form-inline my-lg-0 mr-3">
            <div class="btn-group">
                {{-- <a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./images/usuario.svg" alt="" width="25px">
                </a>
                <div class="dropdown-menu dropdown-menu-right"> --}}
                     {{-- @if (Auth::user()['name'] != '') --}}
                        <a class="btn btn-sm btn-light mr-1 my-2 " href="/perfilusuario">Perfil</a>
                        <a class="btn btn-sm btn-light  my-2" href="/logout">Cerrar sesion</a>
                      {{-- @elseif (Auth::user()['name'] == '') --}}
                        <a class="btn btn-sm btn-light  my-2 mr-1" href="/login">Iniciar sesion</a>
                        <a class="btn btn-sm btn-light  my-2 mr-1" href="/register">Registrarse</a>
                        {{-- @endif --}}
                    </div>


        </form>
    </div>
</nav>

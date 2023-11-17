<nav class="barra-nav">
    <div class="container-nav">
        <div class="logo">
            <img src="{{asset('img/Logo-PulseHub-Branco.png')}}"  alt="logo website branco">


        </div>
        <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        <div class="all-list">
            <ul class="list">
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='staff') active @endif" href="{{ route('staff') }}">Staff</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='blog') active @endif" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='planostreino') active @endif" href="{{ route('planostreino') }}">Planos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='modalidades') active @endif" href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='eventos') active @endif" href="{{ route('eventos') }}">Eventos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='servicos') active @endif" href="{{ route('servicos') }}">Serviços</a></li>
                <li><a href="#">Loja</a></li>
            </ul>

        </div>
        <a href="#" class="button-nav">Login</a>


        <div class="dropdown_menu open">
            <div class="subnav">
                <div class="logo">
                    <img src="{{asset('img/Logo-PulseHub-Branco.png')}}" alt="logo website branco">
                </div>
                <div class="close_btn"><i class="fa-solid fa-xmark"></i></div>
            </div>

            <ul class="list">
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='staff') active @endif" href="{{ route('staff') }}">Staff</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='blog') active @endif" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='planostreino') active @endif" href="{{ route('planostreino') }}">Planos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='modalidades') active @endif" href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='eventos') active @endif" href="{{ route('eventos') }}">Eventos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName()=='servicos') active @endif" href="{{ route('servicos') }}">Serviços</a></li>
                <li><a href="#">Loja</a></li>

            </ul>
        </div>
    </div>

</nav>

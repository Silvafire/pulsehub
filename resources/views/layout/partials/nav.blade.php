<nav class="barra-nav">
    <div class="container-nav">
        <div class="logo">
            <img src="{{ asset('img/Logo-PulseHub-Branco.png') }}" alt="logo website branco">


        </div>
        <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        <div class="all-list">
            <ul class="list">
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'staff') active @endif"
                        href="{{ route('staff') }}">Staff</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'blog') active @endif"
                        href="{{ route('blog') }}">Blog</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'planostreino') active @endif"
                        href="{{ route('planostreino') }}">Planos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'modalidades') active @endif"
                        href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'eventos') active @endif"
                        href="{{ route('eventos') }}">Eventos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'servicos') active @endif"
                        href="{{ route('servicos') }}">Serviços</a></li>
                <li><a href="#">Loja</a></li>
            </ul>

        </div>
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-nav dark topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    @if (auth()->check())
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-200 small">
                                    {{ auth()->user()->name }}
                                </span>
                                @if (auth()->user()->photo == null)
                                    <img class="img-profile rounded-circle" height="40" width="40" alt="User Photo"
                                        src="{{ asset('storage/users_fotos/' . auth()->user()->img) }}">
                                @else
                                    <img class="img-profile rounded-circle" alt="User Photo"
                                        src="{{ asset('storage/users_fotos/' . auth()->user()->img) }}">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('admin.users.edit', auth()->user()) }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    @else

                    @endif
                </li>

            </ul>

        </nav>


        <div class="dropdown_menu open">
            <div class="subnav">
                <div class="logo">
                    <img src="{{ asset('img/Logo-PulseHub-Branco.png') }}" alt="logo website branco">
                </div>
                <div class="close_btn"><i class="fa-solid fa-xmark"></i></div>
            </div>

            <ul class="list">
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'staff') active @endif"
                        href="{{ route('staff') }}">Staff</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'blog') active @endif"
                        href="{{ route('blog') }}">Blog</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'planostreino') active @endif"
                        href="{{ route('planostreino') }}">Planos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'modalidades') active @endif"
                        href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'eventos') active @endif"
                        href="{{ route('eventos') }}">Eventos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'servicos') active @endif"
                        href="{{ route('servicos') }}">Serviços</a></li>
                <li><a href="#">Loja</a></li>

            </ul>
        </div>
    </div>

</nav>
<a href="{{ route('login') }}" class="button-nav">Login</a>

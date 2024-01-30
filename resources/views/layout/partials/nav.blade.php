<!-- Custom fonts for this template -->
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel=" stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<nav class="barra-nav">
    <div class="container-nav">
        <a href="{{ route('index') }}">
            <div class="logo">
                <img src="{{ asset('img/Logo-PulseHub-Branco.png') }}" alt="logo website branco">
            </div>
        </a>
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
                <li><a href="https://wordpress.g3.dwm2023.fun/">Loja</a></li>
            </ul>

        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" flex-column nav-wrapper-flex">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-nav dark topbar  static-top shadow">


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            @if (auth()->check())
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-200 small">
                                        @php
                                            $fullName = auth()->user()->name;
                                            $nameParts = explode(' ', $fullName);
                                            $firstName = $nameParts[0];
                                            $lastName = end($nameParts);
                                            echo $firstName . ' ' . $lastName;
                                        @endphp
                                    </span>
                                    @if (empty(auth()->user()->img))
                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_fotos/user.svg') }}">
                                    @else
                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_fotos/' . auth()->user()->img) }}">
                                    @endif
                                </a>


                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.users.edit', auth()->user()) }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    @if (Auth::user()->perm == 'A')
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Dashboard
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="button-nav">Login</a>
                            @endif
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    @if ($errors->any())
                        @include ('layout.partials.error')
                    @endif
                    @if (!empty(session('success')))
                        @include ('layout.partials.success')
                    @endif
                </div>




            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terminar Sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique no botão "Logout" se confirma que pretende terminar a sua sessão nesta
                    página.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




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


</nav>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('vendor/jquery/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

@yield('scripts')

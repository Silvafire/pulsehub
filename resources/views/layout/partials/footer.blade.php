<footer class="footer">
    <div class="container-footer">
        <div class="upper-footer">
            <div class="logo"><img src="{{ asset('img/Logo-PulseHub-Branco.png') }}" alt="logo branco pulse hub"></div>
            <ul class="list-footer">
                <li><a href="#">Staff</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Planos</a></li>
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'modalidades') active @endif"
                        href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Loja</a></li>

            </ul>
            <div class="social-footer">
                <a href="#"><img src="{{ asset('img/email-branco.svg') }}" alt="email icon"></a>
                <a href="#"><img src="{{ asset('img/insta-branco.svg') }}" alt="instagram icon"></a>
                <a href="#"><img src="{{ asset('img/facebook-branco.svg') }}" alt="facebook icon"></a>
            </div>
        </div>
        <img class="line" src="{{ asset('img/Line 2.svg') }}" alt="grey line footer">
        <div class="lower-footer">
            <p>Pulse Hub 2023. All rights reserved</p>
        </div>
    </div>
</footer>

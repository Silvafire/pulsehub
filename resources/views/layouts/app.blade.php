<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulsehub - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo/SVG/logo.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="background">
        <div class="center">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="txt_field">
                    <input type="text" class="@error('email') is-invalid @enderror" id="email" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span></span>
                    <label>Email</label>
                    <a class=" mail"><i class="fa-solid fa-envelope"></i></a>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="txt_field">
                    <input type="password" id="pass" class="@error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">
                    <span></span>
                    <label>Password</label>
                    <button type="button" class="eye1"><i class="fa-solid fa-eye-slash" id="eye"></i></button>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="forget">
                    @if (Route::has('password.request'))
                    <a class="pass" href="{{ route('password.request') }}">
                        Esqueces-te a password?
                    </a>
                    @endif
                </div>
                <input type="submit" value="Login">
                <div class="signup_link">
                    Não tem conta? <a href="{{ route('register') }}">Registar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        document.querySelector('.eye1').addEventListener('click', function () {
      var x = document.getElementById("pass");
      if (x.type == "password") {
        x.type = "text";
        $('#eye').removeClass('fa-eye-slash');
        $('#eye').addClass('fa-eye');
      } else {
        x.type = "password";
        $('#eye').removeClass('fa-eye');
        $('#eye').addClass('fa-eye-slash');
      }
    });
    </script>
</body>

</html>
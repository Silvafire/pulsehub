<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulsehub - Registo</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

</head>

<body>
    <div class="background">
        <div class="center">
            <h1>Registo</h1>
            <form method="POST" method="{{ route('register') }}">
                @csrf
                <div class="txt_field">
                    <input type="text" class="@error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span></span>
                    <label>Nome</label>
                    <a class="sign"><i class="fa-solid fa-signature"></i></a>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="txt_field">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    <span></span>
                    <label>Email</label>
                    <a class="mail"><i class="fa-solid fa-envelope"></i></a>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="txt_field">
                    <input type="password" id="pass" class="@error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    <span></span>
                    <label>Password</label>
                    <button type="button" class="eye1"><i class="fa-solid fa-eye-slash" id="eye1"></i></button>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="txt_field">
                    <input type="password" id="pass" name="password_confirmation" required
                        autocomplete="new-password">
                    <span></span>
                    <label>Confirme a Password</label>
                    <button type="button" class="eye2"><i class="fa-solid fa-eye-slash" id="eye2"></i></button>
                </div>
                <input type="submit" value="Registar">
                <div class="signup_link">
                    Já tem conta? <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        document.querySelector('.eye1').addEventListener('click', function() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
                $('#eye1').removeClass('fa-eye-slash');
                $('#eye1').addClass('fa-eye');
            } else {
                x.type = "password";
                $('#eye1').removeClass('fa-eye');
                $('#eye1').addClass('fa-eye-slash');
            }
        });
        document.querySelector('.eye2').addEventListener('click', function() {
            var x = document.getElementById("pass");
            if (x.type == "password") {
                x.type = "text";
                $('#eye2').removeClass('fa-eye-slash');
                $('#eye2').addClass('fa-eye');
            } else {
                x.type = "password";
                $('#eye2').removeClass('fa-eye');
                $('#eye2').addClass('fa-eye-slash');
            }
        });
    </script>
</body>

</html>

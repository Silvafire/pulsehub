<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulsehub - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="background">
        <div class="center">
            @yield('content')
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
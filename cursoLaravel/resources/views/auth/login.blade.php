<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>
<body>
    <section class="section-log">
        <div class="container">
            <form action="{{ route('login.post') }}" id="Login" class="form" method="POST">
                @csrf
                <div class="logotno-container">
                    <img class="logotno" src="{{ asset('images/TNOlogo.png')}}" alt="logo del the new one">
                </div>
                <div class="title-container">
                    <h2>BIENVENIDO!</h2>
                </div>
                <div class="form-container">
                    <div class="input-container">
                        <label for="email"></label>
                        <input name="email" type="email" placeholder="email" id="email" required>
                    </div>
                    <div class="input-container">
                        <label for="password"></label>
                        <input name="password" type="password" placeholder="password" id="password">
                    </div>
                </div>
                <div class="button-container">
                    <button class="button_log" type="submit" id="button-login"><p>INGRESAR</p></button>
                </div>
                <div class="button-container-register">
                    <a class="button_reg" id="button-register" href="{{ route('register') }}"><p>REGISTRASE</p></a>
                </div>
                <div class="links-container">
                  <a class="recover-password" href="">Olvidaste tu contraseña?</a>  
                </div>
            </form>
        </div>
    </section>
</body>
</html>

<!-- Credenciales de administrador:
    admin@newone.com
    admin123 -->
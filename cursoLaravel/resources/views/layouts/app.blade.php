
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield ('titulo', 'Pagina TI')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Estilos globales para TODAS las vistas --}}
    <style>
        /* Aqui van los estilos */
    </style>
    {{-- Espacio para que cada vista agregue sus propios estilos --}}
    @yield('estilos')
    <link rel="stylesheet" href="../CSS/styles.css" />
  </head>
  <body>
    {{--Incluye el navbar en TODAS las vistas--}}
    @include('partials.navbar')
    
    {{-- Aqui cada vista mete su contenido --}}
    
    <main>
        @yield('content')
    </main>

    {{-- Incluye el footer en TODAS las vistas --}}
    @include('partials.footer')

    
    {{-- Scripts globales--}}
    <script src="../JS/script.js"></script>

    {{-- Espacio para scripts propios de cada vista--}}
    @yield('scripts')
  </body>
</html>

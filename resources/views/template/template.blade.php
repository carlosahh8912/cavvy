<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title')</title>

        <meta content="CAVVY it empresa de soluciones en tecnologías de la información, soporte técnico, diseño web, soporte ASPEL." name="descriptison">
        <meta content="aspel, diseño web, cctv, soporte tecnico" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/cavvy_logo_brand.png" rel="icon">

        @include('template.styles')

    </head>
    <body class="antialiased">

        @include('nav')
        
        @yield('content')

        @include('footer')

        @include('template.scripts')
    </body>
</html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Confinamento</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        @yield('css-view')
    </head>
    <body>
        @include('templates.menu-lateral')
        @yield('conteudo-view')
        @yield('js-view')
    </body>

</html>
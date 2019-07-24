<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login | Sistema</title>
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
</head>
<body>
    <section id="conteudo-view" class="login">
        <h1 >Paraíso Nutrição</h1>
        <h2 >Gestão de Confinamento</h2>
        <h3>Nosso gerenciado de confinamento</h3>
        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
        <p>Acesse o sistema</p>

        <label>
            {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
        </label>

        <label>
            {!! Form::password('password', ['placeholder' => "Senha"]) !!}
        </label>
        {!! Form::submit('Entrar') !!}
        {!! Form::close() !!}
    </section>
</body>
</html>
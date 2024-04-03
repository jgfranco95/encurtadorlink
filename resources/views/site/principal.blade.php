<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <ul>
        
    <li>
        <a href="/app/Cliente">Cliente</a>
    </li>

    <li>
        <a href="{{route('app.produtos')">Produtos</a>
    </li>

    <li>
        <a href="{{route('app.fornecedor')">Fornecedor</a>
    </li>

    <li>
        <a href="{{route('app.login')">Login</a>
    </li>

    <li>
        <a href="{{route('app.sobrenos')">Sobre-nos</a>
    </li>

    <li>
        <a href="{{route('app.contato')">Contato</a>
    </li>
</ul>
</body>
</html>
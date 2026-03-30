<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
</head>
<body>
    <h1>LANDING PAGE</h1>
    <p>Bienvenido usuario NO autenticado</p>

    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Registro</a>
</body>
</html>
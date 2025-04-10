<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>

        <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
    </div>
</body>
</html>

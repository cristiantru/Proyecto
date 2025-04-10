<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="container">
        <h2>Registrarse</h2>

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nombre:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <label>Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" required>

            <label>Rol:</label>
            <select name="role" required>
                <option value="cliente">Cliente</option>
                <option value="vendedor">Vendedor</option>
            </select>

            <label>
                <input type="checkbox" name="privacy_policy_accepted" value="1" required>
                Acepto los <a href="#">términos de privacidad</a>.
            </label>

            <button type="submit">Registrarme</button>
        </form>

        <div class="text-center">
            <p>¿Ya tienes cuenta?</p>
            <a href="{{ route('login') }}">
                <button style="background-color: #6c757d;">Volver al Login</button>
            </a>
        </div>
    </div>
</body>
</html>

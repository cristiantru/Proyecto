
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error 404 - Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .error-container {
            text-align: center;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #ff6f61;
        }
        .error-message {
            font-size: 22px;
            color: #555;
            margin-bottom: 20px;
        }
        .back-btn {
            text-decoration: none;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
        .illustration {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <img src="{{ asset('images/image.png') }}" alt="Error 404" class="illustration">

        <div class="error-code">404</div>
        <div class="error-message">¡Oh no! La página no se pudo encontrar.</div>
        <p>Es posible que la página haya sido movida o eliminada. Por favor, intenta nuevamente más tarde.</p>
        <a href="{{ url('/dashboard') }}" class="back-btn">Volver al inicio</a>
    </div>
</body>
</html>

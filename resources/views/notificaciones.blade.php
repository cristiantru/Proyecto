<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {!! Breadcrumbs::render('notificaciones') !!}
            </ol>
        </nav>

        <h1>Notificaciones</h1>
        <ul class="list-group">
            <li class="list-group-item">Nueva actualización de producto disponible.</li>
            <li class="list-group-item">Tu pedido ha sido enviado.</li>
            <li class="list-group-item">Tienes un nuevo mensaje de soporte.</li>
        </ul>
    </div>
</body>
</html>

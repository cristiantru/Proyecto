<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ubicaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {!! Breadcrumbs::render('ubicaciones') !!}
            </ol>
        </nav>

        <h1>Ubicaciones</h1>
        <ul class="list-group">
            <li class="list-group-item">Sucursal 1: Calle Ficticia 123, Ciudad A</li>
            <li class="list-group-item">Sucursal 2: Calle Imaginaria 456, Ciudad B</li>
            <li class="list-group-item">Sucursal 3: Calle Inventada 789, Ciudad C</li>
        </ul>
    </div>
</body>
</html>

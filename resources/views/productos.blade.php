<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {!! Breadcrumbs::render('productos') !!}
            </ol>
        </nav>

        <h1>Productos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto A</td>
                    <td>$10</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Producto B</td>
                    <td>$20</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Producto C</td>
                    <td>$30</td>
                    <td>150</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

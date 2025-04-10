<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Definir los breadcrumbs
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));  // Aquí ajustamos la ruta principal
});

Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');  // Cambiamos 'home' por 'dashboard'
    $trail->push('Productos', route('productos'));
});

Breadcrumbs::for('notificaciones', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');  // Cambiamos 'home' por 'dashboard'
    $trail->push('Notificaciones', route('notificaciones'));
});

Breadcrumbs::for('ubicaciones', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');  // Cambiamos 'home' por 'dashboard'
    $trail->push('Ubicaciones', route('ubicaciones'));
});

Breadcrumbs::for('proveedor', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');  // Cambiamos 'home' por 'dashboard'
    $trail->push('Proveedor', route('proveedor'));
});

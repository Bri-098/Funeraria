<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

# ---------- RUTAS PÚBLICAS (puede entrar cualquier visitante) ----------
$routes->get('/', 'HomeController::index');

$routes->get('servicios', 'ServiciosController::index');

$routes->get('nosotros', 'NosotrosController::index');

$routes->group('contacto', function ($routes) {
    # GET: mostrar el formulario
    $routes->get('', 'ContactoController::index');
    # POST: validar el formulario (CSRF activo)
    $routes->post('enviar', 'ContactoController::store');
});

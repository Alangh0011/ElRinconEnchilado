<?php
    require_once __DIR__ . '/../includes/app.php';
    use MVC\Router;
    use Controllers\InicioController;

    $router = new Router();

    $router->get('/inicio', [InicioController::class, 'index']);
    $router->get('/menu', [InicioController::class, 'menu']);
   
    $router->comprobarRutas();
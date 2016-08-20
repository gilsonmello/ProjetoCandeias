<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'Admin',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);

Router::scope('/admin', ['plugin' => 'Admin'], function (RouteBuilder $routes) { 
    $routes->connect('/alunos', ['controller' => 'Usuarios', 'action' => 'alunos']);
    $routes->connect('/logout', ['controller' => 'Login', 'action' => 'logout']);
});

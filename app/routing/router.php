<?php
$router = new AltoRouter();
$router->setBasePath('/E-commerce/public');
$router->map('GET','/','App\Controllers\BaseController@index','Home route');

new \App\Routing\RouteDispatcher($router);

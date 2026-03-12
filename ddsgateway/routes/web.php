<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// API Gateway routes for Site 1
$router->group(['prefix' => 'api/users1'], function () use ($router) {
    $router->get('/', 'User1Controller@index');        // GET all users
    $router->post('/', 'User1Controller@add');         // POST create user  <-- MAKE SURE THIS LINE EXISTS
    $router->get('/{id}', 'User1Controller@show');     // GET single user
    $router->put('/{id}', 'User1Controller@update');   // PUT update user
    $router->patch('/{id}', 'User1Controller@update'); // PATCH update user
    $router->delete('/{id}', 'User1Controller@delete'); // DELETE user
});

// API Gateway routes for Site 2
$router->group(['prefix' => 'api/users2'], function () use ($router) {
    $router->get('/', 'User2Controller@index');        // GET all users
    $router->post('/', 'User2Controller@add');         // POST create user
    $router->get('/{id}', 'User2Controller@show');     // GET single user
    $router->put('/{id}', 'User2Controller@update');   // PUT update user
    $router->patch('/{id}', 'User2Controller@update'); // PATCH update user
    $router->delete('/{id}', 'User2Controller@delete'); // DELETE user
});
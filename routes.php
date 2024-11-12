<?php

$router->setNamespace('\App\Controllers'); 
$router->get('/', 'HomeController@index'); 

$router->get('/vehicles', 'VehiclesController@index'); // Show all vehicles
$router->get('/filemanager', 'FilemanagerController@list'); // Show the file manager
$router->get('/filemanager/delete/{filename}', 'FilemanagerController@delete'); // Delete a file
$router->get('/vehicles/(\d+)', 'VehiclesController@vehicle'); // Show a vehicle
$router->get('/vehicles/(\d+)/edit', 'VehiclesController@edit'); // Show the edit form
$router->post('/vehicles/(\d+)/edit', 'VehiclesController@update'); // Update a vehicle

$router->post('/vehicles', 'VehiclesController@store'); // Store a new vehicle
$router->post('/vehicles/(\d+)/delete', 'VehiclesController@delete'); // Delete a vehicle
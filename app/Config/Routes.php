<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// => default controller
$routes->get('dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/film', 'FilmController::index',['as' => 'film']);
$routes->get('/film/edit/(:num)', 'FilmController::edit/$1',['as' => 'film-edit']);
$routes->get('/film/delete/(:num)', 'FilmController::delete/$1',['as' => 'film-delete']);
$routes->get('/film/create', 'FilmController::create',['as' => 'film-create']);
$routes->post('/film/store', 'FilmController::store',['as' => 'film-store']);
$routes->post('/film/update', 'FilmController::update',['as' => 'film-update']);


$routes->get('/genre', 'GenreController::index',['as' => 'genre']);
$routes->get('/genre/edit/(:num)', 'GenreController::edit/$1',['as' => 'genre-edit']);
$routes->get('/genre/delete/(:num)', 'GenreController::delete/$1',['as' => 'genre-delete']);
$routes->get('/genre/create', 'GenreController::create',['as' => 'genre-create']);
$routes->post('/genre/store', 'GenreController::store',['as' => 'genre-store']);
$routes->post('/genre/update', 'GenreController::update',['as' => 'genre-update']);
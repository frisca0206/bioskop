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


$routes->get('/kursi', 'KursiController::index',['as' => 'kursi']);
$routes->get('/kursi/edit/(:num)', 'KursiController::edit/$1',['as' => 'kursi-edit']);
$routes->get('/kursi/delete/(:num)', 'KursiController::delete/$1',['as' => 'kursi-delete']);
$routes->get('/kursi/create', 'KursiController::create',['as' => 'kursi-create']);
$routes->post('/kursi/store', 'KursiController::store',['as' => 'kursi-store']);
$routes->post('/kursi/update', 'KursiController::update',['as' => 'kursi-update']);


$routes->get('/cemilan', 'CemilanController::index',['as' => 'cemilan']);
$routes->get('/cemilan/edit/(:num)', 'CemilanController::edit/$1',['as' => 'cemilan-edit']);
$routes->get('/cemilan/delete/(:num)', 'CemilanController::delete/$1',['as' => 'cemilan-delete']);
$routes->get('/cemilan/create', 'CemilanController::create',['as' => 'cemilan-create']);
$routes->post('/cemilan/store', 'CemilanController::store',['as' => 'cemilan-store']);
$routes->post('/cemilan/update', 'CemilanController::update',['as' => 'cemilan-update']);


$routes->get('/bioskop', 'BioskopController::index', ['as' => 'bioskop']);
$routes->get('/bioskop/edit/(:num)', 'BioskopController::edit/$1',['as' => 'bioskop-edit']);
$routes->get('/bioskop/delete/(:num)', 'BioskopController::delete/$1',['as' => 'bioskop-delete']);
$routes->get('/bioskop/create', 'BioskopController::create',['as' => 'bioskop-create']);
$routes->post('/bioskop/store', 'BioskopController::store',['as' => 'bioskop-store']);
$routes->post('/bioskop/update', 'BioskopController::update',['as' => 'bioskop-update']);
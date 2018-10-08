<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/departamentos/gardenias', function () {
    return view('gardenias');
});

Route::get('/departamentos/orquideas', function () {
    return view('orquideas');
});

Route::get('/departamentos/lirios', function () {
    return view('margaritas');
});

Route::get('/blog', function () {
  return 'Lee nuestro blog cada semana';
});

Route::get('/name/{name}/lastname/{lastname?}', function ($name, $lastname = null) {
  return 'Bienvenido ' . $name . ' ' . $lastname;
});
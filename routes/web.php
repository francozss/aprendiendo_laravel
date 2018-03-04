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
    return 'Home';
});

Route::get('/usuarios',function(){
  return 'Usuarios';
});

Route::get('/usuarios/nuevo', function() {
  return "Creando nuevo usuario";
});

Route::get('/usuarios/{id}', function($id) {
  return "Mostrando el detalle del usuario: {$id}";
});

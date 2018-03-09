<?php

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios','UserController@index')
  ->name('users.index');

Route::get('/usuarios/{user}', 'UserController@show')
  ->where('user','[0-9]+')
  ->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')
  ->name('users.create');

Route::get('/saludo/{name}/{nickname?}', function($name,$nickname = null){
  $name = ucfirst($name);
  if ($nickname) {
    return "Bienvenido {$name}, tu apode es {$nickname}";
  } else {
    return "Bienvenido {$name}";
  }
});

<?php

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
  ->where('id','[0-9]+');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', function($name,$nickname = null){
  $name = ucfirst($name);
  if ($nickname) {
    return "Bienvenido {$name}, tu apode es {$nickname}";
  } else {
    return "Bienvenido {$name}";
  }
});

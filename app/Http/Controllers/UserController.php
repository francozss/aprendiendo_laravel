<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      $users = [
        'Joel','Ellie','Tess','Tonny','Bills','Franco'
      ];
      $title = 'Listado de Usuarios';
      //var_dump(compact('title','users')); die();
      dd(compact('title','users'));

      return view('users',compact('title','users'));
    }
    public function show($id){
      return "Mostrando detalle del usuario: {$id}";
    }
    public function create(){
      return 'Crear nuevo usuario';
    }
}

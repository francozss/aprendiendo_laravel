<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

      //$users = DB::table('users')->get();
      $users = User::all();
      $title = 'Listado de Usuarios';
      //var_dump(compact('title','users')); die();
      //dd(compact('title','users'));
      // return view('users.index')
      //   ->with('users', User::all())
      //   ->with('title', 'Listado de Usuarios');
      return view('users.index',compact('title','users'));
    }
    public function show($id){
      $user = User::findOrFail($id);

      return view('users.show',compact('user'));
      //return "Mostrando detalle del usuario: {$id}";
    }
    public function create(){
      return 'Crear nuevo usuario';
    }
}

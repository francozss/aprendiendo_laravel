@extends('template')
@section('title', "Crear usuario")
@section('content')
  <h1>Crear usuario</h1>
  <form class="" action="{{ url('usuarios') }}" method="POST">
    {!! csrf_field() !!}
    <div class="row">
      <div class="input-field col s12">
        <input type="text" id="name" name="name">
        <label for="name">Nombre</label>
      </div>
      <div class="input-field col s12">
        <input type="email" id="email" name="email">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="password" id="password" name="password">
        <label for="password">Contraseña</label>
      </div>
    </div>
    <button type="submit" name="button" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></button>
  </form>
  <p>
    <!--<a href="{{ url('/usuarios') }}">Regresar al listado de usuarios</a>-->
    <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
  </p>
@endsection

@extends('template')
@section('title', "Usuario {$user->id}")
@section('content')
  <h1>Usuario # {{ $user->id }}</h1>
  <p>Nombre del usuario: {{ $user->name }}</p>
  <p>Correo del usuario: {{ $user->email }}</p>
  <p>
    <!--<a href="{{ url('/usuarios') }}">Regresar al listado de usuarios</a>-->
    <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
  </p>
@endsection

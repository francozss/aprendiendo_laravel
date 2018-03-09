@extends('template')
@section('title', "Crear usuario")
@section('content')
  <h1>Crear usuario</h1>
  <form class="" action="{{ url('usuarios') }}" method="POST">
    {!! csrf_field() !!}

    <button type="submit" name="button">Crear usuario</button>
  </form>
  <p>
    <!--<a href="{{ url('/usuarios') }}">Regresar al listado de usuarios</a>-->
    <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
  </p>
@endsection

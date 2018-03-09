@extends('template')
@section('title', "Crear usuario")
@section('content')
  <h1>Crear usuario</h1>

  @if ($errors->any())
  <div id="card-alert" class="card pink lighten-5">
    <div class="card-content pink-text darken-1">
      <h6 class="title">Por favor corrija los siguientes errores:</h6>
      <!-- @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach -->
    </div>
  </div>
  @endif

  <form class="" action="{{ url('usuarios') }}" method="POST">
    {!! csrf_field() !!}
    <div class="row">
      <div class="input-field col s12">
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
          <p>{{ $errors->first('name') }}</p>
        @endif
        <label for="name">Nombre</label>
      </div>
      <div class="input-field col s12">
        <input type="email" id="email" name="email" value="{{ old('email') }}">
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

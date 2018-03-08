@extends('template')

@section('content')
      <h1>{{ $title }}</h1>
      <ul>
        @forelse ($users as $user)
          <li>{{ $user->name }}</li>
        @empty
          <li>No hay resultados registrados.</li>
        @endforelse
      </ul>
@endsection

@section('sidebar')
  @parent
  <h2>Barra lateral personalizada</h2>
@endsection

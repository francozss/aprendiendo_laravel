<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> {{$title}} </h1>
    <hr>
      @if (!empty($users))
        <ul>
          @foreach ($users as $user)
            <li> {{$user}} </li>
          @endforeach
        </ul>
      @else
        <p>No existen Usuarios</p>
      @endif

      @unless (empty($users))
        <ul>
          @foreach ($users as $user)
            <li> {{$user}} </li>
          @endforeach
        </ul>
      @else
        <p>No existen Usuarios</p>
      @endunless

      @empty ($users)
        <p>No existen Usuarios</p>
      @else
        <ul>
          @foreach ($users as $user)
            <li> {{$user}} </li>
          @endforeach
        </ul>
      @endempty
  </body>
</html>

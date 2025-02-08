<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordenagailu zerrenda</title>
</head>
<body>
  <h1>Ordenagailu zerrenda</h1>


  @if (session('success'))
  <div style="color: green; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
  <div style="color: red; margin-bottom: 20px;">
        {{ session('error') }}
    </div>
@endif

    <!-- Enlace para volver -->
    <div style="margin-top: 20px;">
    <a href="{{route('ordenador.create')}}">Crear ordenador</a>
  </div>
  <br>

  <!-- Tabla de ordenadores -->
  <table border="1" cellspacing="0" cellpadding="5">
    <thead>
      <tr>
        <th>#</th>
        <th>Izena</th>
        <th>Deskripzioa</th>
        <th>Ekintza</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- Ejemplo de filas -->
      @foreach ($ordenadores as $ordenador)
      <tr>
        <td>{{$ordenador->id}}</td>
        <td>{{$ordenador->nombre}}</td>
        <td>{{$ordenador->descripcion}}</td>
        <td><a href="{{route('ordenador.show', $ordenador)}}">Ikusi</a></td>
        <td><a href="{{route('ordenador.edit', $ordenador)}}">Aldatu</a></td>
        <td>
        <form action="{{route('ordenador.destroy', $ordenador)}}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit">Ezabatu</button>
        </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>


</body>
</html>

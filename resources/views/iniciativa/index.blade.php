<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniziatiba zerrenda</title>
</head>
<body>
  <h1>Iniziatiba zerrenda</h1>

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
    <a href="{{route('iniciativa.create')}}">Crear iniciativa</a>
  </div>
  <br>

  <!-- Tabla de iniciativas -->
  <table border="1" cellspacing="0" cellpadding="5">
    <thead>
      <tr>
        <th>#</th>
        <th>Iniziatiba izena</th>
        <th>Esleitutako ordenagailua</th>
        <th>Kopurua</th>
        <th>Ekintzak</th>
        <th></th>
        <th></th>
      </tr>

    </thead>
    <tbody>
      <!-- Ejemplo de filas -->
      @foreach($iniciativas as $iniciativa)

      <tr>
        <td>{{$iniciativa->id}}</td>
        <td>{{$iniciativa->nombre}}</td>
        <td>{{$iniciativa->ordenador_id}}</td>
        <td>{{$iniciativa->numero}}</td>
        <td><a href="{{route('iniciativa.show', $iniciativa)}}">Ikusi</a></td>
        <td><a href="{{route('iniciativa.edit', $iniciativa)}}">Aldatu</a></td>
        <td>
        <form action="{{route('iniciativa.destroy', $iniciativa)}}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit">Ezabatu</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


  </div>
</body>
</html>

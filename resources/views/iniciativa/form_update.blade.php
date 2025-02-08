<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniziatiba</title>
</head>
<body>
  <h1 >Iniziatiba</h1>

  @if ($errors->any())
  <div style="color: red; margin-bottom: 20px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form action="{{route('iniciativa.update', $iniciativa)}}" method="POST" style="margin: 20px;">
    @csrf
    @method('PUT')
    <!-- Nombre de la iniciativa -->
    <div style="margin-bottom: 15px;"></div>
      <label for="nombre">Iniziatiba izena:</label>
      <input type="text" id="nombre" name="nombre" value="{{$iniciativa->nombre}}">
    </div>
    
    <!-- Selección del ordenador -->
    <div style="margin-bottom: 15px;"></div>
      <label for="ordenador_id">Ordenagailua esleitu:</label>
      <select id="ordenador_id" name="ordenador_id">
        <option value="{{$ordenador_original->id}}" disabled selected>{{$ordenador_original->nombre}}</option>
        @foreach ($ordenadores as $ordenador)
        <option value="{{$ordenador->id}}">{{$ordenador->nombre}}</option>
        @endforeach
      </select>
    </div>

    <!-- Cantidad de ordenadores -->
    <div style="margin-bottom: 15px;"></div>
      <label for="numero">Ordenagailu kopurua:</label>
      <input type="number" id="numero" name="numero" min="1" value="{{$iniciativa->numero}}">
    </div>

    <!-- Botón de envío -->
    <div style="margin-top: 20px;">
      <button type="submit">Iniziatiba gorde</button>
    </div>
  </form>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordenagailua gehitu</title>
</head>
<body>
  <h1>Ordenagailua aldatu</h1>

  @if ($errors->any())
  <div style="color: red; margin-bottom: 20px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <!-- Enlace para volver al listado -->
  <div style="margin-top: 20px;">
    <a href="{{route('ordenador.index')}}">Ordenagailu zerrendara bueltatu</a>
  </div>

  <br>

  <!-- Formulario para añadir un ordenador -->
  <form action="{{route('ordenador.store')}}" method="POST">
    @csrf
    <!-- Nombre del ordenador -->
    <div>
      <label for="nombre">Nombre ordenador:</label>
      <input type="text" id="nombre" name="nombre">
    </div>

    <!-- Descripción del ordenador -->
    <div>
      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion" name="descripcion" rows="4"></textarea>
    </div>

    <!-- Botón para guardar -->
    <div style="margin-top: 10px;">
      <button type="submit">Guardar</button>
    </div>
  </form>


</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Materia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Crear Materia</h2>
        <form action="{{ route('materia.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>                
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}" required>
            </div>

            <div class="form-group">
                <label for="creditos">Creditos</label>
                <input type="text" class="form-control" id="creditos" name="creditos" value="{{ old('creditos') }}" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ old('tipo') }}" required>
            </div>

            <div class="form-group">
                <label for="valor_hora">Valor</label>
                <input type="text" class="form-control" id="valor_hora" name="valor_hora" value="{{ old('valor_hora') }}" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear</button>
            <a href="{{ route('materia.index') }}" class="btn btn-primary">Volver</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

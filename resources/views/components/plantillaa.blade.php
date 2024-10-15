<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Autos Usados</title>
    @vite(["resources/js/app.js"])
</head>

<body>
    <div class="container text-center">
        {{ $slot }}

        <div class="row">
            <div class="col-3">
                {{ $derecha }}
            </div>
            <div class="col-9">
                {{ $izquierda }}
            </div>
        </div>
    </div>
</body>

</html>
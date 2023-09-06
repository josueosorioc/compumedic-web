<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forma de contacto Compumedic</title>
</head>

<body>
    <p>Estos son los datos del mensaje:</p>
    <ul>
        <li>Nombre: {!! $info->nombre !!}</li>
        <li>Correo Electrónico: {!! $info->email !!}</li>
        <li>Teléfono: {!! $info->telefono !!}</li>
        <li>Mensaje: {!! $info->mensaje ? $info->mensaje : '' !!}</li><br><br>

    </ul>
</body>

</html>

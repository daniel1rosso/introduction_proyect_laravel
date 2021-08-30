<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Contenido del mensaje</h2>
    <p>Recibiste un mensaje de : {{ $msg['nombre'] }} - {{ $msg['email'] }}</p>
    <p>Su mensaje es: {{ $msg['contenido'] }}</p>
</body>
</html>
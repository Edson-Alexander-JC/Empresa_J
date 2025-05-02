<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Solicitud de nuevo personal</h1>
    <p>Aprueba este personal para que comience a trabajar</p>
    <a href="{{ route('personal.show',$personal) }}">
        Ver Personal
    </a>
</body>
</html>
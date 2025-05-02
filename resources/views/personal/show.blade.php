<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola {{$personal->nombre}}</h1>
    <br>
    <br>
    <!-- <a href="../personal/{{$personal->id}}/edit">Editar Personal</a> -->
    <a href="{{ route('personal.edit',$personal->id) }}">Editar Personal</a>
    <br>
    <br>
    <form action="{{route('personal.destroy',$personal->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <h2><button>Eliminar Personal</button></h2>
    </form>
</body>
</html>
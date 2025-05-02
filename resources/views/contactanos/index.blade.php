<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        @error('nombre')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Nombre
            <br>
            <input type="text" name="nombre">
        </label>
            <br>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Correo
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        @error('mensaje' )
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Mensaje
            <br>
            <textarea name="mensaje" id=""></textarea>
        </label>
        <br>
        <button type="submit">Enviar Mensaje</button>
    </form>
    @if (session('info'))
        <script>
            alert('{{session('info')}}');
        </script>
    @endif
</body>
</html>
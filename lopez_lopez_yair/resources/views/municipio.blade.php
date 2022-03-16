<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($muni as $item)
            <a href="{{route('ver.estado', $item['id'])}}">{{$item['municipio']}}</a><br>
        @endforeach
    </div>
</body>
</html>
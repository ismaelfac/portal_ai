<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato</title>
</head>
<body>
    <h1>ALIADOS INMOBILIARIOS S.A</h1>
    <h1 style="text-align: center">{!! $data[0]->title !!}</h1><br>
    @foreach ($data[0]->components as $item)
        <div style="text-align: justify">{!! $item->content !!}</div>
    @endforeach
</body>
</html>

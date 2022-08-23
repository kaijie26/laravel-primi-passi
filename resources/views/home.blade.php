<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Word</h1>

    <div>
        <h3>Capo Partito</h3>
        <div>Nome: {{ $name }}</div>
        <div>Cognome: {{ $lastname }}</div>

    </div>

    <div>
        <h3>Sottosegretari:</h3>
        <div>
            @foreach($undersecretaries as $undersecretary)
                {{ $undersecretary  }}
                @if(!$loop -> last)
                ,
                @endif
            @endforeach
        </div>

    </div>
    
</body>
</html>
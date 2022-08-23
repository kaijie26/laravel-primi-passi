<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- Header --}}
    <header>
        <h3>Link informativi:</h3>
        <ul>
            <li>
                <a href="{{ route('our-team')}}">Chi Siamo</a>
            </li>
            <li>
                <a href="{{ route('our-goals')}}">I nostri obiettivi</a>
            </li>
            <li>
                <a href="{{ route('join-us')}}">Unisciti a noi</a>
            </li>
            
        </ul>
    </header>

    {{-- Page-Ttile --}}
    <h1>Hello Word</h1>

    {{-- Leader --}}
    <div>
        <h3>Capo Partito</h3>
        <div>Nome: {{ $name }}</div>
        <div>Cognome: {{ $lastname }}</div>

    </div>

    {{-- List-undersecretaries  --}}
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
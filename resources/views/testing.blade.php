<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing</title>
</head>
<body>

    @php
        $test = 'Hello Guys';
        $users = [1, 2, 3, 4, 5, 6];
        $a = 8;
        $b = 8;
    @endphp

    <h1>{{ $test }} Welcome to my Website</h1><br>

    @foreach ($users as $user)
        <h1>{{ $user }}</h1>
    @endforeach

    @if($a > $b)
        <h2>A is Big</h2>
    @elseif ($a < $b)
        <h2>B is Bing</h2>
    @else
        <h2>Both Are Same.</h2>
    @endif

</body>
</html>

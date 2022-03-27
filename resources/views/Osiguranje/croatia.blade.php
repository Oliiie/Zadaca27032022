<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Croatia</title>
</head>
<body>
    <h1>Dobrodosli na Croatia Osiguranje</h1>
    <p>{{ $cro }}</p>
    <p>{{ $crovrijednost }}</p>
    @foreach($data as $item)
       
        <p>
            {{ $item }}
        </p>

    @endforeach
</body>
</html>
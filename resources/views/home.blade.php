<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Laravel</title>
</head>
<body>
    <h1> Créer un projet Laravel </h1>
        @foreach($homeData as $data)
            <p> {{ $data }} </p>
        @endForeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo kontaktno sporočilo</title>
</head>
<body>
    <h1>Novo sporočilo od:</h1>
    {{ $name }}
    <br>
    <p>Email:</p>
    {{ $email }}
    <br>
    <p>Spodaj je sporočilo, ki ga je poslal/a uporabnik:</p>
    {{ $body }}
</body>
</html>

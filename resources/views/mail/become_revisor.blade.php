<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Un utente ha richiesto di diventare revisore</h1>
     <h2>Ecco i suoi dati:</h2>
     <p>{{$user->name}}</p>   
     <p>{{$user->email}}</p>
     <p>se vuoi renderlo revisore clicca qui:</p>
     <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
    
</body>
</html>
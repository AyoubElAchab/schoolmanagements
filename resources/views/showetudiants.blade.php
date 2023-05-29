<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
</head>
<body>
    <a href="etudiants/create" style="float:right">Ajouter un etudiant</a>
    @if (count($etudiants)>0)
        <table>
            <tr>
                <th>code</th>
                <th>nom</th>
                <th>prénom</th>
                <th>addresse</th>
                <th>Date de naissance</th>
                <th>Id classe</th>
            </tr>
            @foreach ($etudiants as $e)
                <tr>
                    <td>{{$e->codeE}} </td>
                    <td>{{$e->nom}}</td>
                    <td>{{$e->prenom}}</td>
                    <td>{{$e->addresse}}</td>
                    <td>{{$e->dateNaissance}}</td>
                    <td><a href="/classes/{{$e->idclasse}}">{{$e->idclasse}} </a></td>
                    <td><a href="/etudiant/{{$e->codeE}}">Détails..</a> | <a href="/etudiant/{{$e->codeE}}/edit">Modifier</a></td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Pas d'étudiants dans la BD</p>
    @endif
    
</body>
</html>
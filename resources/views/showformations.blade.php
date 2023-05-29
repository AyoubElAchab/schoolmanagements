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
    <a href="formation/search" style="float-right">Rechercher une formation</a>
    @if (count($formations)>0)
        <table class="table table-striped w-50">
            <tr>
                <th>id formation</th>
                <th>Titre</th>
                <th>Nombre d'heures</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($formations as $f)
                <tr>
                    <td>{{$f->idf}} </td>
                    <td>{{$f->Titre}} </td>
                    <td>{{$f->NbreHeure}} </td>
                    <td>
                        <a href="/formation/{{$f->idf}}">Détails.. 
                        </a>
                    </td>
                    <td>
                        <a href="">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Pas de formation dans la BD</p>
    @endif
</body>
</html>
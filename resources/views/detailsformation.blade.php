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
    <a href="/formation" style="float:right">Liste des formations</a>
    <h5>les information de la formation</h5>
    <ul>
        <li>
            <p>id de la formation : {{$formation->idf}},Titre : {{$formation->Titre}}, le nombre d'heures : {{$formation->NbreHeure}} </p>
        </li>
        <li>le nombre total des classes de cette formation : {{count($classes)}} </li>
        <li>
            <p>plus de détails sur les classes</p>
            <table class="table w-50 text-center">
                <tr>
                    <th></th>
                    <th scope="col">id classe</th>
                    <th scope="col">libelle</th>
                    <th scope="col" >Nbre Max autorisé</th>
                    <th scope="col" >Nbre etudiants enregistrés </th>

                </tr>
                @php
                    $i=1
                @endphp
                @foreach ($classes as $classe)
                    <tr>
                        <td>{{$i}} </td>
                        <td>{{$classe->idc}} </td>
                        <td>{{$classe->libelle}} </td>
                        <td>{{$classe->NombreMax}} </td>
                        <td>{{count($classe->etudiants)}} </td>
                        @php
                            $i=$i+1
                        @endphp
                    </tr>
                @endforeach
            </table>
        </li>

    </ul>
</body>
</html>
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
<body class="contauner">
    <div class="row">
        <div class="card rounded-3 col-md-5 m-1">
            <div class="card-body">
                <h5 class="card-title">les information de l'étudiant :</h5>
                <p class="card-text">
                    Code : {{$etudiant->codeE}} <br>
                    Nom et prénom : {{$etudiant->nom}} {{$etudiant->prenom}} <br/>
                    Sa date de naissance :  {{$etudiant->dateNaissance}} <br>
                    don address : {{$etudiant->address}}
                </p>
            </div>
        </div>
        <div class="card rounded-3 col-md-5 m-1">
            <div class="card-body">
                <h5 class="card-title">sa classe</h5>
                <p class="card-text">
                    L'id : {{$classe->idc}} <br>
                    Libelle: {{$classe->libelle}} <br>
                    Nombre maximum des étudiants : {{$classe->NombreMax}}
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card rounded-3 col-md-5 m-1">
            <div class="card-body">
                <h5 class="card-title">La formation en cours</h5>
                <p class="card-text">
                    <ul>
                        <li>L'id de formation : {{$classe->idformation}}</li>
                        <li>Le titre de formation : {{$formation->Titre}} </li>
                        <li>le nombre d'heure de formation : {{$formation->NbreHeure}} </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="card rounded-3 col-md-5 m-1">
            <div class="card-body">
                <h5 class="card-title">Les avis</h5>
                <p class="card-text">
                    <ul>
                        @foreach ($AVIS as $a)
                            <li class="list-group-item list">
                                id Formation : {{$a->idf}} les points :{{$a->pivot->points}} 

                            </li>
                        @endforeach
                    </ul>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
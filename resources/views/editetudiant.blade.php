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
<body class="container">
    <div class="card-body">
        <h5 class="card-title">L'ancienne classe :</h5>
        <p class="card-text">
            L'id : {{$e->classe->idc}} <br/>
            Libelle : {{$e->classe->libelle}} <br/>
            Nombre maximum des étudiant : {{$e->classe->NombreMax}}
        </p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Choisir une nouvelle classe :</h5>
        <p class="card-text">
            <form action="{{route('etudiant.update',$e)}}" method="POST">
                @csrf
                @method('patch')
                choisir un <b>autre</b> id: 
                <select name="l" class="form-control custom-select w-25" id="l">
                    @foreach ($idclasses as $idcs)
                        <option value="{{$idcs->idc}}">{{$idcs->idc}}</option>
                    @endforeach
                </select>
                <button type="submit" >update</button>
            </form>
        </p>
    </div>
</body>
</html>
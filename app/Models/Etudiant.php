<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $primaryKey="codeE";
    protected $timestamp = false;
 
    protected $fillable=['nom','prenom','adresse','dateNaissance'];

    // etudiant ymkan ykon fi classe wahda
    // etudiant 1..1 = 1 classe
    public function classe(){
        return $this->belongsTo(Classe::class,'idclasse');
    }

    public function avis(){
        return $this->belongsToMany(Formation::class,'Avis','idE','idf')->withpivot('points');
    }
}

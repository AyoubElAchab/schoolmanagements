<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ets = Etudiant::all();
        return view('showetudiants',["etudiants"=>$ets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $e=Etudiant::find($id);
        $classe=$e->classe;
        $AV=$e->avis;
        $formation = $classe->formation;
        return view('detailsetudiant',["etudiant"=>$e,"classe"=>$classe,"AVIS"=>$AV,"formation"=>$formation]);
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $e=Etudiant::find($id);
        $idClasses= Classe::select('idc')->whereNotIn('idc',[$e->idclasse])->get();
        return view('editetudiant',['e'=>$e,'idclasses'=>$idClasses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Etudiant::where('codeE',$id)
            ->update(['idclasse'=>$request->l]);
        return redirect('/etudiant');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

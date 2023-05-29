<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function search(){
        $idFormation=Formation::select('idf')->get();
        return view('searchformation',['idf'=>$idFormation]);
    }

    public function rechercher(Request $request){
        $idFormation=Formation::select('idf')->get();
        $idf=Formation::with('classes.etudiants')->find($request->l);
        return view('rechercherformation',['idformation'=>$idf,"idf"=>$idFormation]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $f=Formation::all();
        return view('showformations',["formations"=>$f]);
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
    public function show(string $id)
    {
        //
        $f=Formation::find($id);
        $classes=$f->classes;
        // $nbreclasse$f->classes->count();
        return view('detailsformation',
        ["formation"=>$f,"classes"=>$classes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mangas;
use Illuminate\Http\Request;

class MangasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Mangas::all();
        return view ('index', compact('mangas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mangas  $mangas
     * @return \Illuminate\Http\Response
     */
    public function show(Manga $manga)
    {
        $dessinateur = $manga->dessinateur;
        $scenariste = $manga->scenariste;
        $genre = $manga->genre;
        return view('manga', compact('manga'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mangas  $mangas
     * @return \Illuminate\Http\Response
     */
    public function edit(Mangas $mangas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mangas  $mangas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mangas $mangas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mangas  $mangas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manga $manga)
    {
        $manga -> delete();
        return back()->with('info', 'le manga a bien été supprimé de la base de données');
    }
   
    
    
}


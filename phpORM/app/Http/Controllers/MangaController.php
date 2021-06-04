<?php

namespace App\Http\Controllers;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = Manga::all();
        return view ('index', compact('mangas'));
    }
    public function show(Manga $manga)
    {
        return view('manga', compact('manga'));
    }
    public function destroy(Manga $manga)
    {
        $manga -> delete();
        return back()->with('info', 'le manga a bien été supprimé de la base de données');
    }
}

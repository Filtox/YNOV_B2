<?php

namespace App\Http\Controllers;

use App\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get("search");
        if($search){
            $recettes = Recette::where('titre', 'like', '%'.$search.'%')->get();
        }else{
            $recettes = Recette::all();
        }
        return view("recette.index", ["recettes" => $recettes, "search" => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("recette.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titre = $request->input('titre');
        $ingredients = $request->input('ingredients');

        $recette = new Recette;
        $recette->titre = $titre;
        $recette->ingredients = $ingredients;
        $recette->save();
        return redirect()->route('recette.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        return view("recette.show", ["recette" => $recette]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette)
    {
        return view("recette.edit", ["recette" => $recette]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recette $recette)
    {
        $titre = $request->input('titre');
        $ingredients = $request->input('ingredients');

        $article = Recette::find($recette->id);
        $article->titre = $titre;
        $article->ingredients = $ingredients;
        $article->save();
        return redirect()->route('recette.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        $recette->delete();
        return redirect()->route('recette.index');
    }

    public function details(int $id) {
        $recette = Recette::find($id);
        return view("recette.show", ["recette" => $recette]);
    }
}

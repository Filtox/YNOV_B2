<?php

namespace App\Http\Controllers;

use App\Adresse;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurants = Restaurant::all();

        return view('index', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $iadresse = $request->input('adresse', '');
        $ville = $request->input('ville', '');
        $codepostal = $request->input('codepostal', '');
        $siteweb = $request->input('siteweb', '');
        $description = $request->input('description', '');
        $cuisine = $request->input('cuisine', '');
        $etat = $request->input('etat', '');

        $restaurant = new Restaurant;
        $restaurant->nom = $nom;
        $restaurant->siteweb = $siteweb;
        $restaurant->description = $description;
        $restaurant->cuisine = $cuisine;
        $restaurant->etat = $etat;
        $restaurant->save();

        $adresse = new Adresse;
        $adresse->adresse = $iadresse;
        $adresse->ville = $ville;
        $adresse->codepostal = $codepostal;
        $restaurant->adresse()->save($adresse);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view("show", ["restaurant" => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view("edit", ["restaurant" => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $nom = $request->input('nom');
        $adresse = $request->input('adresse', '');
        $ville = $request->input('ville', '');
        $codepostal = $request->input('codepostal', '');
        $siteweb = $request->input('siteweb', '');
        $description = $request->input('description', '');
        $cuisine = $request->input('cuisine', '');
        $etat = $request->input('etat', '');

        $restaurant = Restaurant::find($restaurant->id);
        $restaurant->nom = $nom;
        $restaurant->adresse->adresse = $adresse;
        $restaurant->adresse->ville = $ville;
        $restaurant->adresse->codepostal = $codepostal;
        $restaurant->siteweb = $siteweb;
        $restaurant->description = $description;
        $restaurant->cuisine = $cuisine;
        $restaurant->etat = $etat;
        $restaurant->push();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->adresse->delete();
        $restaurant->delete();
        return redirect()->route('home');
    }
}

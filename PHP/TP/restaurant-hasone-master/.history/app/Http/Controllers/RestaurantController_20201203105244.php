<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $adresse = $request->input('Adresse');
        $ville = $request->input('ville');
        $codepostal = $request->input('code');
        $description = $request->input('description');
        $types = $request->input('types');
        $etat = $request->input('etat');

        $restaurant = new Restaurant;
        $restaurant->nom = $name;
        $restaurant->description = $description;
        $restaurant->types = $types;
        $restaurant->etat = $etat;
        $restaurant->push();

        $restaurant->adresse()->adresse = $adresse;
        $restaurant->adresse()->ville = $ville;
        $restaurant->adresse->codepostal = $codepostal;
        return redirect()->route('restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view ('restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view ('restaurants.edit', ['restaurant' => $restaurant]);
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
        $name = $request->input('name');
        $adresse = $request->input('Adresse');
        $ville = $request->input('ville');
        $codepostal = $request->input('code');
        $description = $request->input('description');
        $types = $request->input('types');
        $etat = $request->input('etat');

        $restaurant = Restaurant::find($restaurant->id);
        $restaurant->nom = $name;
        $restaurant->adresse->adresse = $adresse;
        $restaurant->adresse->ville = $ville;
        $restaurant->adresse->codepostal = $codepostal;
        $restaurant->description = $description;
        $restaurant->types = $types;
        $restaurant->etat = $etat;
        $restaurant->save();
        return redirect()->route('restaurants.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurants.index');
    }
}

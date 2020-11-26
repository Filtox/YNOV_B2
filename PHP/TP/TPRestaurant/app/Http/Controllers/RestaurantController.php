<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use SebastianBergmann\GlobalState\Restorer;

class RestaurantController extends Controller
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
            $restaurants = Restaurant::where('nom', 'like', '%'.$search.'%')->orWhere('ville', 'like', '%' . $search . '%')->orWhere('codepostal', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%')->orWhere('typedecuisine', 'like', '%' . $search . '%')->orWhere('etat', 'like', '%' . $search . '%')->get();
        }else{
            $restaurants = Restaurant::all();
        }
        return view("restaurant.index", ["restaurants" => $restaurants, "search" => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("restaurant.create");
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
        $adresse = $request->input('adresse');
        $ville = $request->input('ville');
        $codepostal = $request->input('codepostal');
        $siteweb = $request->input('siteweb');
        $description = $request->input('description');
        $typedecuisine = $request->input('typedecuisine');
        $etat = $request->input('etat');

        $restaurant = new Restaurant;
        $restaurant->nom = $nom;
        $restaurant->adresse = $adresse;
        $restaurant->ville = $ville;
        $restaurant->codepostal = $codepostal;
        $restaurant->siteweb = $siteweb;
        $restaurant->description = $description;
        $restaurant->typedecuisine = $typedecuisine;
        $restaurant->etat = $etat;
        $restaurant->save();
        return redirect()->route('restaurant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view("restaurant.show", ["restaurant" => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view("restaurant.edit", ["restaurant" => $restaurant]);
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
        $adresse = $request->input('adresse');
        $ville = $request->input('ville');
        $codepostal = $request->input('codepostal');
        $siteweb = $request->input('siteweb');
        $description = $request->input('description');
        $typedecuisine = $request->input('typedecuisine');
        $etat = $request->input('etat');

        $restaurant = Restaurant::find($restaurant->id);
        $restaurant->nom = $nom;
        $restaurant->adresse = $adresse;
        $restaurant->ville = $ville;
        $restaurant->codepostal = $codepostal;
        $restaurant->siteweb = $siteweb;
        $restaurant->description = $description;
        $restaurant->typedecuisine = $typedecuisine;
        $restaurant->etat = $etat;
        $restaurant->save();
        return redirect()->route('restaurant.index');
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
        return redirect()->route('restaurant.index');
    }

    public function details(int $id) {
        $restaurant = Restaurant::find($id);
        return view("restaurant.show", ["restaurant" => $restaurant]);
    }
}

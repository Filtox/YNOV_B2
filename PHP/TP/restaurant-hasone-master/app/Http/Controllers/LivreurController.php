<?php

namespace App\Http\Controllers;

use App\Livreur;
use App\Restaurant;
use Illuminate\Http\Request;

class LivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('livreurs.index',
        [
            'restaurant' => Restaurant::find($request->get('restaurant')),
            'livreurs' => Livreur::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Restaurant $restaurant)
    {
        $restaurant_id = $request->input('restaurant_id');
        return view ('livreurs.create', [
            'restaurant' => $restaurant, 
            'restaurant_id' => $restaurant_id
        ]);
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
     * @param  \App\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function show(Livreur $livreur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function edit(Livreur $livreur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livreur $livreur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livreur  $livreur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livreur $livreur)
    {
        //
    }
}

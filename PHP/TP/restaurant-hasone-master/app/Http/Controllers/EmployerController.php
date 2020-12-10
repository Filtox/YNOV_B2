<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Restaurant;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        return view('employer.index', ['employers' => $employers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.create');
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
        $prenom = $request->input('prenom');
        $restaurant = $request->input('restaurant_id');

        $employer = new Employer;
        $employer->nom = $nom;
        $employer->prenom = $prenom;
        $employer->restaurant->nom = $restaurant;
        $employer->save();
        
        return redirect()->route('employer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        return view ('employer.show', ['employer' => $employer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        $restaurants = Restaurant::All();
        return view ('employer.edit', [
            'employer' => $employer,
            'restaurant' => $restaurants
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $restaurant = $request->input('restaurant_id');

        $employer = Restaurant::find($restaurant->id);
        $employer->nom = $nom;
        $employer->prenom = $prenom;
        $employer->restaurant->nom = $restaurant;
        $employer->push();
        return redirect()->route('restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return redirect()->route('employer.index');
    }
}

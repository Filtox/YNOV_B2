<?php

namespace App\Http\Controllers;

use App\Deliverer;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DelivererController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @param Restaurant $restaurant
     * @return View
     */
    public function index(Request $request) {
        return view(
            "deliverer.index",
            [
                "current_restaurant_id" => $request->get("restaurant"),
                "deliverers"=>Deliverer::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request): View {
        return \view(
            "deliverer.create",
            [
                "restaurants" => Restaurant::all(),
                "current_restaurant_id" => $request->input("restaurant_id")
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        $newDeliverer = new Deliverer();
        $newDeliverer->name = $request->input("name");
        $newDeliverer->vehicle = $request->input("vehicle");
        $newDeliverer->save();

        $newDeliverer->restaurants()->attach($request->input("restaurants"));

        return redirect()->route(
            "deliverer.index",
            [
                "restaurant" => $request->get("restaurant_id"),
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Deliverer $deliverer
     * @return \Illuminate\Http\Response
     */
    public function show(Deliverer $deliverer) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Deliverer $deliverer
     * @return View
     */
    public function edit(Deliverer $deliverer) {
        return \view("deliverer.edit",
            [
                "restaurants" => Restaurant::all(),
                "editing_deliverer" => $deliverer
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Deliverer $deliverer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverer $deliverer) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Deliverer $deliverer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverer $deliverer) {
        //
    }
}

<?php

use App\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                "nom" => "Mc Do",
                "adresse" => "20 rue de la poupée qui tousse",
                "ville" => "Toulouse",
                "codepostal" => "31000",
                "siteweb" => "mcdo.fr",
                "description" => "Fast food sur la nourriture américaine",
                "typedecuisine" => "Hamburger, Snacks, frites",
                "etat" => "Ouvert"
            ]
        ]);
        
        factory(Restaurant::class, 20)->create()->each(function ($restaurant) {
            $restaurant->save();
        });
    }
}

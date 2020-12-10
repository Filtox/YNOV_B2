<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $id = DB::table('restaurants')->insert(
            [
                "nom" => "Le Chien Rouge",
                "description" =>  "test description",
                "types" => "Burger , Bar ",
                "etat" => "Ouvert"
            ])->id;

        factory(Restaurant::class, 15)->create()->each(function ($restaurant){
            $restaurant->save();
            
        });
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert(
            [
                "nom" => "Le Chien Rouge",
                "adresse" => "49 Lices Georges Pompidou",
                "ville" => "Albi",
                "codepostal" => "81000",
                "description" =>  "test description",
                "types" => "Burger , Bar ",
                "etat" => "Ouvert"
            ]);

        factory(Restaurant::class, 15)->create()->each(function ($restaurant){
            $restaurant->save();
        })
    }
}

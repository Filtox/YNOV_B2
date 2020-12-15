<?php

use Illuminate\Database\Seeder;

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
                "codepostal" => 
            ]
        )
    }
}

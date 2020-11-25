<?php

use App\Recette;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recettes')->insert([
            [
                "titre" => "Poulet",
                "ingredients" => "sauce, lol"
            ],
            [
                "titre" => "Cochon",
                "ingredients" => "ribs"
            ]
        ]);

        factory(Recette::class, 20)->create()->each(function ($recette) {
            $recette->save();
        });
    }
}

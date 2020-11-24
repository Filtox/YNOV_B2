<?php

namespace Database\Seeders;

use App\Models\Recette;
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
                "nom" => "poulet",
                "ingredients" => "First article description"
            ],
            [
                "nom" => "cochon",
                "ingredients" => "Second article description"
            ],
        ]);
        Recette::factory()
            ->times(50)
            ->create();
    }
}

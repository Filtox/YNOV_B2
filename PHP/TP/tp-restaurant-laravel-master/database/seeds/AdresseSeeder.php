<?php

use App\Adresse;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adresses')->insert([
            [
                'adresse' => '35 rue de la bouffe',
                'ville' => 'Toulouse',
                'codepostal' => '31000'
            ]
        ]);

        factory(Adresse::class, 5)->create()->each(function ($adresse) {
            $adresse->save();
        });
    }
}

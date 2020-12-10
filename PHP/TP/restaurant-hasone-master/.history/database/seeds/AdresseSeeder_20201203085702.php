<?php

use Illuminate\Database\Seeder;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adresses')->insert(
            [
                "adresse" => "49 Lices Georges Pompidou",
                "ville" => "Albi",
                "codepostal" => "81000",
            ]);

            factory(Adresse::class, 15)->create()->each(function ($adresse){
                $restaurant->save();
            });
    }
    
}

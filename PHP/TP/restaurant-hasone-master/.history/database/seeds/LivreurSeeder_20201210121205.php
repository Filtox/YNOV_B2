<?php

use Illuminate\Database\Seeder;

class LivreurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Livreur::class, 15)->create()->each(function ($livreur){
            $adresse->save();
        });
    }
}

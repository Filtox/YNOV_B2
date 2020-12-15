<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Livreur;

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
            $livreur->save();
        });
    }
}

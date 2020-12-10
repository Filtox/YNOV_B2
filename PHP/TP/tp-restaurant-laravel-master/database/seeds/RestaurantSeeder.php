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
        $id = DB::table('restaurants')->insertGetId([
            'nom' => 'Tacos Industry',
            'siteweb' => 'www.tacos-industry.com',
            'description' => 'Meilleur tacos de Toulouse !',
            'cuisine' => 'Tacos',
            'etat' => 'Ouvert'
        ]);

        DB::table('adresses')->insert([
            'restaurant_id' => $id,
            'adresse' => '35 rue de la bouffe',
            'ville' => 'Toulouse',
            'codepostal' => '31000'
        ]);

        DB::table('employers')->insert([
            'restaurant_id' => $id,
            'nom' => 'Chamass',
            'prenom' => 'Nicolas'
        ]);

        factory(Restaurant::class, 5)->create()->each(function ($restaurant) {
            $restaurant->save();

            $faker = Faker\Factory::create();

            DB::table('adresses')->insert([
                'restaurant_id' => $restaurant->id,
                'adresse' => $faker->text(50),
                'ville' => $faker->text(50),
                'codepostal' => $faker->text(50)
            ]);
        });
    }
}

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
       $id = DB::table('restaurants')->insertGetId(
            [
                "nom" => "Le Chien Rouge",
                "description" =>  "test description",
                "types" => "Burger , Bar ",
                "etat" => "Ouvert"
            ]);

            DB::table('adresses')->insert(
                [
                    "restaurant_id" => $id,
                    "adresse" => "49 Lices Georges Pompidou",
                    "ville" => "Albi",
                    "codepostal" => "81000",
                ]);

             DB::table('employers')->insert(
                [
                    "restaurant_id" => $id,
                    "nom" => "Arnal",
                    "prenom" => "Albi",
                ]);

        factory(Restaurant::class, 15)->create()->each(function ($restaurant){
            $restaurant->save();

            $faker = Faker\Factory::create();

            DB::table('adresses')->insert(
                [
                    "restaurant_id" => $restaurant->id,
                    "adresse" => $faker->text(50),
                    "ville" => $faker->text(50),
                    "codepostal" => $faker->text(50),
                ]);
        });
    }
}

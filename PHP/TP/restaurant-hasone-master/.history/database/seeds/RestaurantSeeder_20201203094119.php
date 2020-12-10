<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Restaurant;
use Faker\Generator as Faker;

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
                    "id_restaurant" => $id,
                    "adresse" => "49 Lices Georges Pompidou",
                    "ville" => "Albi",
                    "codepostal" => "81000",
                ]);

        factory(Restaurant::class, 15)->create()->each(function ($restaurant){
            $restaurant->save();

            $faker = Faker::create();

            DB::table('adresses')->insert(
                [
                    "id_restaurant" => $restaurant->id,
                    "adresse" => $faker->text(50),
                    "ville" => $faker->text(50),
                    "codepostal" => $faker->text(50),
                ]);
        });
    }
}

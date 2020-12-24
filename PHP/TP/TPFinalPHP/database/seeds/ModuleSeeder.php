<?php

use App\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert(
            [
                "nom" => "DÉVELOPPEMENT LOGICIEL",
                "description" => " Algorithme, Application Mobile, IoT, Langage objet, Maths, Node.JS, Scripting, UML, Projet transversal",
            ]
        );

        DB::table('modules')->insert(
            [
                "nom" => "TECHNOLOGIES WEB",
                "description" => " Ergonomie, Framework PHP, HTML CSS et Javascript, Intégration graphique, Web Node.JS, PHP (.Net), SEO & SEA, Webmarketing, Projet transversal",
            ]
        );
        DB::table('modules')->insert(
            [
                "nom" => "MANAGEMENT DES SYSTÈMES D’INFORMATION",
                "description" => " Anglais, Communication professionnelle, DevOps, Management de projet, Sécurité",
            ]
        );
        factory(Module::class, 5)->create()->each(function ($module){
            $module->save();

            $faker = Faker\Factory::create();

            DB::table('modules')->insert(
                [
                    "nom" => $faker->randomElement(['DÉVELOPPEMENT LOGICIEL', 'TECHNOLOGIES WEB', 'MANAGEMENT DES SYSTÈMES D’INFORMATION', 'INFRASTRUCTURE SYSTÈMES D’INFORMATION', 'BASE DE DONNÉES', 'PROJETS COLLABORATIFS']),
                    "description" => $faker->text(50),         
                ]);
        });
    }
}

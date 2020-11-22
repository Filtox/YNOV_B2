<?php

use App\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                "name" => "Hello world",
                "description" => "First article description"
            ],
            [
                "name" => "Second Article",
                "description" => "Second article description"
            ],
        ]);
        factory(Task::class, 20)->create()->each(function ($article) {
            $article->save();
        });
    }
}

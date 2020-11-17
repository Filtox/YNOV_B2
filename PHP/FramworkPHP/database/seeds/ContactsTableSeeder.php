<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'firstname' => 'Jhon',
                'lastname' => 'Doe',
                'email' => 'jhon.doe@email.com',
                'phonenumber' => 'XXXXXX',
                'comments' => 'none',
            ],
            [
                'firstname' => '',
                'lastname' => '',
                'email' => '',
                'phonenumber' => '',
                'comments' => 'none',
            ],
        ])
    }
}

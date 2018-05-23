<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => str_random(10),
            'email' => str_random(10) . '@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
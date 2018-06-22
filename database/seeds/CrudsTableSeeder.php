<?php

use Illuminate\Database\Seeder;

class CrudsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Crud', 5)->create();
    }
}

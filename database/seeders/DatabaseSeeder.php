<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //Seeders separated in an array
    public function run()
    {
        $this->call([
            BoardPageSeeder::class,
            BoardsSeeder::class,
            AdminSeeder::class
        ]);

    }
}

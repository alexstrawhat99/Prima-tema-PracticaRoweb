<?php

namespace Database\Seeders;

use App\Models\Boards;
use Illuminate\Database\Seeder;

class BoardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boards::create([
        'name' =>'first assignment',
        'user' =>'Alex',
        'members' =>'3 members',
        'action' =>'edit'
             ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\BoardPage;
use Illuminate\Database\Seeder;

class BoardPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BoardPage::create([
            'name' =>'first assignment',
            'description' =>'waited',
            'assignment' =>'in work',
            'status' =>'done',
            'date of creation' =>''
        ]);
    }


}

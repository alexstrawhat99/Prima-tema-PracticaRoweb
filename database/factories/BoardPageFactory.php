<?php

namespace Database\Factories;

use App\Models\BoardPage;
use Database\Seeders\BoardPageSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BoardPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoardPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'assignment' => $this->faker->text,
            'status' => $this->faker->text,
            'date of creation' => $this->faker->date,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
    //     * @return \Illuminate\Database\Eloquent\Factories\Factory
    //     */
//    public function unverified()
//    {
//        return $this->state(function (array $attributes) {
//            return [
//                'email_verified_at' => null,
//            ];
//        });
//    }
}

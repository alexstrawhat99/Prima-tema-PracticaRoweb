<?php

namespace Database\Factories;

use App\Models\Boards;
use Database\Seeders\BoardsSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BoardsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Boards::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user' => $this->faker->unique(),
            'members' => $this->faker->text,
            'action' => $this->faker->text,
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

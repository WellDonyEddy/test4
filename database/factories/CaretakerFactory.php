<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=caretaker>
 */
class CaretakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "full_name"=>$this->faker->name,
            "address"=>$this->faker->address,
            "phone_number"=>$this->faker->phoneNumber,
        ];
    }
}

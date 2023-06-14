<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Teacher>
 */
class TeacherFactory extends Factory
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
            "group_id"=>Group::get()->random()->id,

        ];
    }
}

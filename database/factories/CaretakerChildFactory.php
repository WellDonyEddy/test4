<?php

namespace Database\Factories;

use App\Models\Child;
use App\Models\Caretaker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CaretakerChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "child_id"=>Child::get()->random()->id,
            "caretaker_id"=>Caretaker::get()->random()->id,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domicilio>
 */
class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all();

        return [
            'numero_exterior' => fake()->unique()->randomDigit,
            'colonia' => fake()->address,
            'cp' => fake()->randomNumber(5, true),
            'ciudad' => fake()->country() 
        ];
    }

}

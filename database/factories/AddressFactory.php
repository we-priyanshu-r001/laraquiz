<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'country' => fake()->randomElement(['India', 'Florida', 'Mayanmar', 'Canada', 'Russia', 'China', 'Mexico', 'Costa Rica']),
            'state' => fake()->randomElement(['MP', 'Bihar', 'Paolo Alto', 'Texas', 'West Bengal']),
            'pin' => fake()->postcode,
        ];
    }
}

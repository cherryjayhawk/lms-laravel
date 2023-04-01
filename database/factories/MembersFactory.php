<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\members>
 */
class MembersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'status' => $this->faker->randomElement(['active', 'nonactive'])
        ];
    }
}

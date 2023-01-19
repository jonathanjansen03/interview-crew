<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'username' => $this->faker->word(3),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123'), // password
            'phone_number' => $this->faker->phoneNumber(),
            'role' => 'Member'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function isAdmin()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'Admin',
            ];
        });
    }
}

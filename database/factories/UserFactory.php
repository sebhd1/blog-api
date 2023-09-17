<?php

namespace Database\Factories;

use App\Enums\ProfileStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'description' => fake()->text(),
            'status' => fake()->randomElement( ProfileStatus::cases()),
            'socials' =>[
                'Facebook' => fake()->url(),
                'Instagram' => fake()->url(),
                'Github' => fake()->url(),
                'LinkedIn' => fake()->url(),
            ],
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function isAdmin() : static
    {
        return $this->state(fn(array $attributes) => [
            'is_admin' => true,
        ]);
    }
}

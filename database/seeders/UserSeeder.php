<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->isAdmin()
            ->create(
                [
                    'name' => 'Sebastian',
                    'surname' => 'Ballotta',
                    'email' => 'sebeballotta@outlook.com',
                    'password' => 'secret',
                ],
            );

        User::factory()
            ->isAdmin()
            ->create(
                [
                    'name' => 'Gennaro',
                    'surname' => 'Landolfi',
                    'email' => 'code@rinodrummer.dev',
                    'password' => 'secret',
                ],
            );

        User::factory()
            ->create();
    }
}

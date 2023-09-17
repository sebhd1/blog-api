<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory(5)
            ->create();

        for($i = 0; $i <= 10; $i++) {
            Tag::factory(random_int(2, 6))
                ->has(Post::factory())
                ->create();
        }
    }
}

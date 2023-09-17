<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i <= 10; $i++) {
            Like::factory(random_int(3, 20))
                ->has(Post::factory(), 'likeable')
                ->create();

            Like::factory(random_int(3, 20))
                ->has(Comment::factory(), 'likeable')
                ->create();
        }
    }
}

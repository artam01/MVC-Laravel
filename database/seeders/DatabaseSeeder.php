<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $posts = [
            [
                'title' => 'First Post',
                'excerpt' => 'Excerpt of the first post',
                'body' => 'Content of the first post',
            ],
            [
                'title' => 'Second Post',
                'excerpt' => 'Excerpt of the second post',
                'body' => 'Content of the second post',
            ],
            // Add more posts as needed
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}

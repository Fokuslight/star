<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(30)->create();
        $tags = Tag::all();
        foreach ($posts as $post) {
            $post->tags()->attach($tags->random(5)->pluck('id'));
        }
    }
}

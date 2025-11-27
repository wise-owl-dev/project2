<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post=Post::factory()->count(50)->create();

        foreach($post as $post){
            $tags = rand(1,5);
            $tagIds = Tag::all()->random($tags)->pluck('id');
            $post->tags()->attach($tagIds);
            $post->comments()->create([
                'text' => 'comentario',
                'user_id' => User::all()->random()->id,
            ]);
        }
    }
}

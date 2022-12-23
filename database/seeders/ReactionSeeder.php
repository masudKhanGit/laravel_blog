<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Reaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $posts = Post::all();
        foreach($users as $user) {
            foreach($posts as $post) {
                Reaction::factory(1)->create([
                    'user_id' => $user->id,
                    'post_id' =>$post->id
                ]);
            }
        }
    }
}

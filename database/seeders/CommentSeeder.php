<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
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
        foreach ($users as $user) {
            foreach ($posts as $post) {
                $comment = Comment::factory(1)->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                ])->first();
                Comment::factory(1)->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                    'comment_id' => $comment->id,
                ]);
            }
        }
    }
}

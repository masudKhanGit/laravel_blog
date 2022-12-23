<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\View;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViewSeeder extends Seeder
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
            foreach ($posts as $post) {
                View::factory(2)->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                ]);
            }
        }
    }
}

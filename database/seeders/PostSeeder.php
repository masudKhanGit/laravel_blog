<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $categories = Category::all();
        foreach($users as $user) {
            foreach($categories as $category) {
                Post::factory(10)->create([
                    'user_id' => $user->id,
                    'category_id' => $category->id
                ]);
            }
        }
    }
}

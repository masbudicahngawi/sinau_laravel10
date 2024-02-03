<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $users = User::all();

        for($i = 1; $i <= 20; $i++){
            Post::create([
                'title' => "Post $i",
                'description' => "This is the content of Post $i",
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id
            ]);
        }
    }
}
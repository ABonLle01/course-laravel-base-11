<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $options = ['yes','not'];

        for ($i = 0; $i <= 20; $i++) {
            $title = Str::random(20);
            $category = Category::inRandomOrder()->first();
            $posted = $options[array_rand($options)];

            Post::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga magni vel, nihil alias consequatur error iure maxime iusto nam quis?',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'posted' => $posted,
                'category_id' => $category->id,
            ]);
        }
    }
}

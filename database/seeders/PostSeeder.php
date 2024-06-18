<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Welcome Now',
            'body' => 'first Body seeder',
            'user_id'=>'1'

        ]);

        Post::create([
            'title' => 'Welcome Now again',
            'body' => 'secound Body seeder',
            'user_id'=>'1'
        ]);

        Post::create([
            'title' => 'Welcome Now ',
            'body' => 'Body seeder',
            'user_id'=>'2'
        ]);

    }
}

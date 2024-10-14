<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Article::create([
            'title' => 'Stress in Cats',
            'category' => 'Cats',
            'image' => 'cat1.jpg',
            'description' => 'Signs and management of stress in cats.',
            'type' => 'Behaviour'
        ]);

        Article::create([
            'title' => 'Diabetes in Cats',
            'category' => 'Cats',
            'image' => 'cat2.jpg',
            'description' => 'How to manage diabetes in your cat.',
            'type' => 'Health'
        ]);
    }
}

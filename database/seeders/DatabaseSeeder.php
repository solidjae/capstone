<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Recipes::create([
            'title' => 'lemons',
            'ingredients' => 'lemons, other stuff, onions',
            'review' => 'good',
            'link' => 'google.com'
        ]);
        Recipes::create([
            'title' => 'pizza',
            'ingredients' => 'tomatos, other stuff, onions',
            'review' => 'very good',
            'link' => 'google.com'
        ]);

    }
}

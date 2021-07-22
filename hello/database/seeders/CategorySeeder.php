<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['programing', 'marketing', 'social media', 'project manager', 'artist'] as $name){
            Category::create([
                'name' => $name
            ]);
        }
    }
}

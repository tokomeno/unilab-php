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
        // php artisan db:seed --class=CategorySeeder
        foreach(['programing', 'marketing', 'social media', 'project manager', 'artist', 'business management', 'frontend programing', 'backend programing'] as $name){
            Category::create([
                'name' => $name
            ]);
        }
    }
}

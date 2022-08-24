<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'restaurant_name' => 'Test',
            'category_name' => 'Grocery',
            'parent_id' => NULL,
            'status' => true
        ]);

        Category::create([
            'restaurant_name' => 'Test',
            'category_name' => 'Food & Beverages',
            'parent_id' => 1,
            'status' => true
        ]);

        Category::create([
            'restaurant_name' => 'Test',
            'category_name' => 'Smoothies',
            'parent_id' => 2,
            'status' => true
        ]);

        Category::create([
            'restaurant_name' => 'Test',
            'category_name' => 'Burger',
            'parent_id' => 2,
            'status' => true
        ]);
    }
}

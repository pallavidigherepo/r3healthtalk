<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Parent Categories
        $wellness = Category::create(['name' => 'Wellness']);
        $symptoms = Category::create(['name' => 'Symptoms']);

        // Wellness Subcategories
        $nutriScore = Subcategory::create(['name' => 'Nutri-Score', 'category_id' => $wellness->id]);
        $ifScore = Subcategory::create(['name' => 'IF Score', 'category_id' => $wellness->id]);
        $physicalActivity = Subcategory::create(['name' => 'Physical Activity Score', 'category_id' => $wellness->id]);
        $sleepScore = Subcategory::create(['name' => 'Sleep Score', 'category_id' => $wellness->id]);

        // Symptoms Subcategories
        $bca = Subcategory::create(['name' => 'BCA', 'category_id' => $symptoms->id]);
        $metabolicSyndrome = Subcategory::create(['name' => 'Metabolic Syndrome', 'category_id' => $symptoms->id]);
        $hormonalIssues = Subcategory::create(['name' => 'Hormonal Issues', 'category_id' => $symptoms->id]);
        $gutHealth = Subcategory::create(['name' => 'Gut Health', 'category_id' => $symptoms->id]);
    }
}

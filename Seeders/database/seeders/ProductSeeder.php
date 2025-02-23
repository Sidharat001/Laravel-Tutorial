<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the JSON file contents
        $ProductJson = File::get(database_path('json/Product.json'));
        
        // Decode the JSON into an array
        $ProductArray = collect(json_decode($ProductJson));

        // Loop through each product in the JSON array and create a record
        foreach ($ProductArray as $Product) {
            Product::create([
                'title' => $Product->title,
                'price' => $Product->price,
                'description' => $Product->description,
                'category' => $Product->category,
                'image' => $Product->image,
                'rating' => $Product->rating,
            ]);
        }
    }
}

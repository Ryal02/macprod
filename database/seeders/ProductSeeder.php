<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        $faker = Faker::create();

        foreach (range(1, 200) as $index)  {
            Product::create([
                'name' => $faker->name,
                'brand' => Brand::all()->random()->id,
                'price' => $faker->numberBetween($min = 500, $max = 8000),
            ]);
           
        }
    }
}

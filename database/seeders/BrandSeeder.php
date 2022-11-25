<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        Brand::create(['name' => 'Adidos']);
        Brand::create(['name' => 'Nyke']);

        Brand::create(['name' => 'Jordance']);

        Brand::create(['name' => 'Ballpenshoppe']);


       
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
      DB::table('categories')->insert([
    ['name' => 'Phones'],
    ['name' => 'Laptops'],
    ['name' => 'Tv'],
    ['name' => 'Tablets'],
    ['name' => 'Accessories'],
    ['name' => 'Home Appliances'],
    ['name' => 'Gaming'],
    ['name' => 'Smartwatches'],
]);
    }
}

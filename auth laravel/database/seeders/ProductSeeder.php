<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $faker = Faker::create();
            $obj=new Item;
            $obj->Product_name=$faker->text;
            $obj->Product_category= $faker->text;
            $obj->Product_price= $faker->numberbetween($min=1,$max=10000);
            $obj->Product_quantity= $faker->numberbetween($min=1,$max=100);
            $obj->save();
        }
    }
}
 
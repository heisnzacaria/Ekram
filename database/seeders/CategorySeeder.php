<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{


    public function run()
 {
    //  factory(Category::class,10)->create();

    Category::factory()->count(10)->create();
 }

}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          // \App\Models\User::factory(10)->create();
          // \App\Models\Category::factory(10)->create();
          // \App\Models\Produit::factory(10)->create();
          // \App\Models\Order::factory(10)->create();
          // \App\Models\Admin::factory(1)->create();


$this->call(UserSeeder::class);
$this->call(CategorySeeder::class);
$this->call(ProduitSeeder::class);
$this->call(OrderSeeder::class);
$this->call(AdminSeeder::class);
  }
}

<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminite\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use FakerGenerator as Faker;


class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->name),
            'description' => $this->faker->text(180),
            "price" => $this->faker->numberBetween($min = 100, $max=900),
            "old_price" => $this->faker->numberBetween($min = 100, $max=900),
            "inStock" => $this->faker->numberBetween($min = 1, $max=20),
            "img" => $this->faker->imageUrl($width = 640, $height=400),
            "category_id" =>$this->faker->numberBetween($min = 1, $max=10)

        ];
    }
}

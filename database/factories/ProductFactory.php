<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     

     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;


     


    public function definition(): array
    {
        return [
            //
            'product_name' => $this->faker->word (),
            'description_product' => $this->faker->sentences (4, true),
            'price_product' => $this->faker->numberBetween(500,1000000),
            'qte_product' => $this->faker->numberBetween(1,100),


        ];
    }
}

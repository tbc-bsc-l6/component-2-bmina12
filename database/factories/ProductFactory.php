<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            //
            'picture' => 'product-'.$this->faker->numberBetween(1,10).'.jpg',
            'title' => $product_name,
            'price' => $this->faker->numberBetween(10,500),
            'description' => $this->faker->text(50),
        ];
    }
}

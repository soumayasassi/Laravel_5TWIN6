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
        return [
            'name'=>$this->faker->name(20),
            'description'=> $this->faker->text(100),
            'price'=> $this->faker->randomNumber(3),
            'stock'=> $this->faker->randomNumber(3),
        ];
    }
}

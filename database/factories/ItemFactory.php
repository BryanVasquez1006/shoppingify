<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $items = ['Cerdo', 'Jamon de Cerdo', 'Brocoli', 'Papas', 'Tomates', 'Coca-cola', 'Horchata', 'Agua',];
        return [
            "name" => $this->faker->unique()->randomElement($items),
            "note" => fake()->text(),
            "category_id" => Category::all()->random()->id
        ];
    }
}

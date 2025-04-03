<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $adjectives = ['Ultra', 'Pro', 'Max', 'Eco', 'Smart', 'Magic'];
        $nouns = ['Speaker', 'Watch', 'Lamp', 'Bottle', 'Phone', 'Backpack'];

        return [
            'name' => $this->faker->randomElement($adjectives) . ' ' . $this->faker->randomElement($nouns),
            'price' => $this->faker->randomFloat(2, 10, 300),
            'description' => $this->faker->sentence(),
        ];
    }
}

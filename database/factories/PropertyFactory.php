<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'feature_img' => 'https://picsum.photos/1900/1080',
            'price' => rand(3000000,900000),
            'location' => Location::all()->random()->id,
            'sale' => rand(0,1),
            'type' => rand(0,2),
            'overview' => $this->faker->text('100'),
            'bedrooms' => rand(1,10),
            'bathrooms' => rand(1,8),
            'gross_sqm' => rand(55,300),
            'pool' => rand(0,3),
            'why_buy' => $this->faker->text('500'),
            'description' => $this->faker->text('1000'),
            'net_sqm' => rand(70,500),
        ];
    }
}

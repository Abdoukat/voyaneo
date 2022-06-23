<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4,$asText = true);
        $slug = Str::slug($product_name);
        return [
            'titre' => $product_name,
            'slug' => $slug,
            'short_description'=>$this->faker->text(50),
            'description'=>$this->faker->text(500),
            'prix_pub'=>$this->faker->numberBetween(10,500),
            'stock_status'=>'disponible',
            'image'=>'room-' . $this->faker->unique()->numberBetween(1,6).'.jpg',
            'trans'=>'oui',
            'prix_date'=>$this->faker->numberBetween(10,100),
            'eco'=>$this->faker->numberBetween(10,500),
            'bus'=>$this->faker->numberBetween(10,500),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\GalleryPic;
use App\Models\GallerySection;

class GalleryPicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GalleryPic::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->word(),
            'sort_order' => $this->faker->numberBetween(-10000, 10000),
            'gallery_section_id' => GallerySection::factory(),
        ];
    }
}

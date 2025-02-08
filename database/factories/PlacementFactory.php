<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Placement;

class PlacementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Placement::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'placement_date' => $this->faker->date(),
            'date_format' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'company_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'company_logo_image' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'students_image' => $this->faker->word(),
            'publish_status' => $this->faker->boolean(),
        ];
    }
}

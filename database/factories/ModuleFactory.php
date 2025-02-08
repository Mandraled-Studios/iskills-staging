<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Module;

class ModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Module::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'super_header' => $this->faker->regexify('[A-Za-z0-9]{120}'),
            'sort_order' => $this->faker->numberBetween(-10000, 10000),
            'course_id' => Course::factory(),
        ];
    }
}

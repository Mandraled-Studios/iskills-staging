<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Career;

class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Career::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'designation' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'vacancies' => $this->faker->numberBetween(-10000, 10000),
            'salary' => $this->faker->word(),
            'description' => $this->faker->text(),
            'requirements' => $this->faker->text(),
            'skillset' => $this->faker->text(),
            'job_location' => $this->faker->regexify('[A-Za-z0-9]{255}'),
        ];
    }
}

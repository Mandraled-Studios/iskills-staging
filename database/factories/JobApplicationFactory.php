<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JobApplication;

class JobApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobApplication::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->regexify('[A-Za-z0-9]{160}'),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'alternate_phone' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'pincode' => $this->faker->numberBetween(-10000, 10000),
            'state' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'city' => $this->faker->city(),
            'region' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'house_no' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'qualification' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'certifications' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'desired_position' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'experience_in_years' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'resume' => $this->faker->word(),
        ];
    }
}

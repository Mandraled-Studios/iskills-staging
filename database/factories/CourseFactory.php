<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\CourseCategory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'thumbnail' => $this->faker->word(),
            'hero_image' => $this->faker->word(),
            'description' => $this->faker->text(),
            'seo_title' => $this->faker->regexify('[A-Za-z0-9]{120}'),
            'meta_description' => $this->faker->regexify('[A-Za-z0-9]{160}'),
            'course_duration' => $this->faker->numberBetween(-10000, 10000),
            'course_duration_unit' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'class_duration' => $this->faker->numberBetween(-10000, 10000),
            'class_duration_unit' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'frequency' => $this->faker->regexify('[A-Za-z0-9]{32}'),
            'additional_info' => $this->faker->text(),
            'eligibility' => $this->faker->text(),
            'curriculum' => $this->faker->text(),
            'exam_criteria' => $this->faker->text(),
            'certification_authority' => $this->faker->word(),
            'course_category_id' => CourseCategory::factory(),
        ];
    }
}

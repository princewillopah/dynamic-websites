<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Applicant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'email' => $this->faker->email,
            'sex' => $this->faker->randomElement(['Male','Female']),
            'job_id' => $this->faker->numberBetween(1,80),
            'cv_upload' => 'fjg4vdjhrhrfcvfhgfggf',
        ];
    }
}

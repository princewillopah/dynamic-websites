<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jb = ['Fulltime','Partime','Intern','Contract'];
        $title = $this->faker->name;
        return [
            'title'          =>$title,
            'slug'           => Str::slug($title),
            'company_name'   => $this->faker->company,
            'job_type'       => $this->faker->randomElement($jb),
            'job_code'       => 'D'.$this->faker->numerify('##########'),
            'short_description' => $this->faker->paragraph(2),
            'description' => $this->faker->paragraph(7),
            'due_date' => $this->faker->dateTimeBetween($startDate="-2 days",$endDate="+28 days")->format("Y-m-d H:i:s"),
            'show' =>  $this->faker->numberBetween(0,1),
            'industry_id' =>  $this->faker->numberBetween(1,25),
            'location_id' =>  $this->faker->numberBetween(1,37),
        ];
    }
}

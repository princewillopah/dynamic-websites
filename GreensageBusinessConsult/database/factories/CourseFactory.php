<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
     *
     * @return array
     */
    public function definition()
    {
            $title = $this->faker->name;
        return [
            'title'          =>$title,
            'slug'           => Str::slug($title),
            'amount' => $this->faker->numberBetween(250,594),
            'short_description' => $this->faker->paragraph(2),
            'description' => $this->faker->paragraph(7),
            'date' => $this->faker->date($format = 'Y-m-d', $min = 'now'),
            'popular' =>  $this->faker->numberBetween(0,1),
            'category_id' =>  $this->faker->numberBetween(1,14),
            'format_id' =>  $this->faker->numberBetween(1,2),
            'cover_img' =>'cover_img_default.jpg',
            'thumbnail' =>'thumb_img_default.jpg',
         ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Format;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class FormatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Format::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $format = ['In-house Training','Virtual Training'];
        $name = $this->faker->unique()->randomElement($format);
        return [
            'name' =>  $name,
            'slug'=> Str::slug($name)
        ];
    }
}

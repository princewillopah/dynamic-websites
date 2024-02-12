<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CategoryFactory extends Factory
{
  
    protected $model = Category::class;

 
    public function definition()
    {
    
            $categories = ['Administrative','Audit & Quality Assurance','Information Technology',
            'Contracts management','Finance & Accounting or Banking Investment','Human Resource Management',
            'Management and Leadership','Professional Development for Women','Project Management','Telecommunication',
            'Public Relations','Strategy and Leadership','Sales & Marketing','Risk Management'];
            $name = $this->faker->unique()->randomElement($categories);
            return [
                'name' => $name,
                'slug'=> Str::slug($name),
                'icon'=> 'icon.png',
                'cover_img'=> 'cover_img.png',
                'card_img'=> 'card_img.png',
           ];
    
    }
}

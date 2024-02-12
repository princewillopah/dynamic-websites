<?php

namespace Database\Factories;

use App\Models\Industry;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndustryFactory extends Factory
{
   
    protected $model = Industry::class;


    public function definition(){
    $sector = ["Accountancy"," banking and finance","Business"," consulting and management","Charity and voluntary work","Creative arts and design","Energy and utilities","Engineering and manufacturing","Science and Technology","Environment and agriculture","Healthcare","Hospitality and events management","Information technology","Law","Law enforcement and security","Leisure"," sport and tourism","Marketing"," advertising and PR","Media and internet","Property and construction","Public services and administration","Recruitment and HR","Retail","Sales","Science and pharmaceuticals","Social care","Teacher training and education","Transport and logistics"];

        return [
            'name' => $this->faker->unique()->randomElement($sector),

        ];
    }
}

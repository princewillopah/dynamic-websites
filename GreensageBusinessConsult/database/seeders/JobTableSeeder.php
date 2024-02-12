<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use Illuminate\Support\Str;

class JobTableSeeder extends Seeder
{
   
    public function run()
    {
        
        $title1 = 'Business Analysis';$title2 = 'John Lee';$title3 = 'Packer Love';$title4 = 'Gaga Olusetye';$title5 = 'Gred Paul';
        $title6 = 'Obasenjo Ogungbe';$title7 = 'Alem Paul';$title8 = 'Tosin Ade';$title9 = 'Akata koko';$title10 = 'Moshood Ola';
        Job::create([
            'title'        => $title1 ,
            'slug'        => Str::slug($title1),
            'short_description' => 'Minister',
            'description' => rand(1,5),
            'due_date'     => rand(0,1),
            'show'    => 0,
        ]);

    }
}

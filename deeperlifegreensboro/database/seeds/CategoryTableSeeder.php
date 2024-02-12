<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        \App\Category::create([
            "name"  => "Sunday School",
        ]);
        \App\Category::create([
            "name"  => "Bible Study",
        ]);
        \App\Category::create([
            "name"  => "Revival Service",
        ]);
        \App\Category::create([
            "name"  => "Worker's Training",
        ]);
        \App\Category::create([
            "name"  => "Leadership",
        ]);
        \App\Category::create([
            "name"  => "Retreats",
        ]);
        \App\Category::create([
            "name"  => "Youth Success",
        ]);
        \App\Category::create([
            "name"  => "The Truth",
        ]);
        \App\Category::create([
            "name"  => "Watch Night Service",
        ]);
        \App\Category::create([
            "name"  => "Marriage Seminars",
        ]);
        \App\Category::create([
            "name"  => "European Conferences",
        ]);
        \App\Category::create([
            "name"  => "North American Conferences",
        ]);
    }
}

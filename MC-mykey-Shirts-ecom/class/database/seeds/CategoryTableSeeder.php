<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        App\Category::create([
        	'name' => 'Shoes',
            'slug' => 'Shoes'
        ]);
	    App\Category::create([
		    'name' => 'Sleves',
            'slug' => 'Sleves'
	    ]);
	    App\Category::create([
		    'name' => 'Watches',
            'slug' => 'Watches'
	    ]);
	    App\Category::create([
		    'name' => 'Lady Bags',
            'slug' => 'Lady-Bags'
	    ]);
	    App\Category::create([
		    'name' => 'Jeans',
            'slug' => 'Jeans'
	    ]);
	    App\Category::create([
		    'name' => 'Gowns',
            'slug' => 'Gowns'
	    ]);
    }
}

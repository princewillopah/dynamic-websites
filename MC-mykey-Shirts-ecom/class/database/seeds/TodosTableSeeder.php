<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Todo::class,40)->create();
    }
}

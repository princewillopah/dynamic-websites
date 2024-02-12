<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(4)->create();
        \App\Models\Category::factory(14)->create();
        \App\Models\Format::factory(2)->create();
        \App\Models\Course::factory(150)->create();
        \App\Models\Job::factory(80)->create();
        \App\Models\Applicant::factory(130)->create();
        \App\Models\Industry::factory(25)->create();
        \App\Models\Location::factory(37)->create();
    }
}

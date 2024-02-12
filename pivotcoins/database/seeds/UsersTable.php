<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\User::create([
            'name'         => 'Princewill',
            'lastname'     => 'Opah',
            'admin'     => 1,
            'email'    => 'princewillopah@gmail.com',
            'password' => bcrypt('prince'),
        ]);
        
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        App\User::create([
        	'name'     => 'Princewill Opah',
	        'email'    => 'princewillopah@gmail.com',
	        'password' => bcrypt('popopo')
        ]);

	    App\User::create([
		    'name'     => 'Princewill',
		    'email'    => 'popo@gmail.com',
		    'password' => bcrypt('popopo')
	    ]);

	    App\User::create([
		    'name'     => 'Opah',
		    'email'    => 'popo@popo.com',
		    'password' => bcrypt('popopo')
	    ]);

	    App\User::create([
		    'name'     => 'Prince',
		    'email'    => 'prynzwyl@gmail.com',
		    'password' => bcrypt('popopo')
	    ]);

    }
}

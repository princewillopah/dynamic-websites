<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        App\User::create([
            'name'     => 'Princewill Opah',
            'email'    => 'popo@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  1,
            'author'   =>  1,
        ]);
        App\User::create([
            'name'     => 'Opah',
            'email'    => 'opah@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  1,
        ]);
        App\User::create([
            'name'     => 'Princewill',
            'email'    => 'princewillo@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  1,
            'author'   =>  0,
        ]);
        App\User::create([
            'name'     => 'John Doe',
            'email'    => 'john@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  0,
        ]);
        App\User::create([
            'name'     => 'Alice Grey',
            'email'    => 'alice@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  1,
        ]);
        App\User::create([
            'name'     => 'Drake Lee',
            'email'    => 'lee@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  1,
        ]);
        App\User::create([
            'name'     => 'Compton',
            'email'    => 'j@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  0,
        ]);
        App\User::create([
            'name'     => 'Adele Malik',
            'email'    => 'am@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  0,
        ]);
        App\User::create([
            'name'     => 'Judy',
            'email'    => 'jd@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  0,
        ]);
        App\User::create([
            'name'     => 'Tony Lee',
            'email'    => 'LT@popo.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  0,
            'author'   =>  0,
        ]);
        App\User::create([
            'name'     => 'prince smart ujukwa',
            'email'    => 'princewillopah@gmail.com',
            'password' =>  bcrypt('popopo'),
            'admin'    =>  1,
            'author'   =>  1,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user1 = App\User::create([
            'name'         => 'Princewill',
            'lastname'     => 'Opah',
            'admin'        => 1,
            'email'        => 'princewillopah@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            // 'photo'        => 'uploads/placeholders/avatar.png',
            'phone_number'        => '+12344334455',
            // 'address'      => '12 okorogro street ajegunle lagos',
        ]);
        $user2 = App\User::create([
            'name'         => 'comraid',
            'lastname'     => 'gray',
            'admin'        =>  0,
            'email'        => 'comraid@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            // 'photo'        => 'uploads/placeholders/avatar.png',
            'phone_number'        => '+1344334455',
            // 'address'      => '78 okorogro street ajegunle lagos',
        ]);
        $user3 = App\User::create([
            'name'         => 'john',
            'lastname'     => 'pah',
            'admin'        =>  0,
            'email'        => 'jp@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            // 'photo'        => 'uploads/placeholders/avatar.png',
            'phone_number'        => '+42344334455',
            // 'address'      => '45 okorogro street ajegunle lagos',
        ]);
        $user4 = App\User::create([
            'name'         => 'drake',
            'lastname'     => 'hapes',
            'admin'        =>  0,
            'email'        => 'drakesh@gmail.com',
            'password'     => bcrypt('prince'),
            'walletId'     => 'yfytfyfffghcfhcvgvcghcghghcghhgcghghcghcghnhg',
            // 'photo'        => 'uploads/placeholders/avatar.png',
            'phone_number'        => '+72344334455',
            // 'address'      => '76 okorogro street ajegunle lagos',
        ]);
      
        
// ===============balnces=======================================
           
// ===================withdrawals=============================================

            App\Withdrawal::create([
                'user_id'         => $user3->id,
                'withdrwal_amount'  => '77.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user3->id,
                'withdrwal_amount'  => '67.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user2->id,
                'withdrwal_amount'  => '54.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user1->id,
                'withdrwal_amount'  => '0.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user4->id,
                'withdrwal_amount'  => '0.00',
            ]);
            App\Withdrawal::create([
                'user_id'         => $user2->id,
                'withdrwal_amount'  => '19.00',
            ]);
            
// ===================deposits=============================================

            App\Deposit::create([
                'user_id'         => $user1->id,
                'deposit_amount'  => 7667.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  4,
                'returns'         =>  7667.00*(4/100),
                
            ]);
            App\Deposit::create([
                'user_id'         => $user1->id,
                'deposit_amount'  => 1677.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  3,
                'returns'         =>  1677.00*(3/100),
            ]);
             App\Deposit::create([
                'user_id'         => $user1->id,
                'deposit_amount'  =>  2167.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  3,
                'returns'         =>  2167.00*(3/100),
            ]);
              App\Deposit::create([
                'user_id'         => $user1->id,
                'deposit_amount'  => 3277.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  3,
                'returns'         =>  3277.00*(3/100),
            ]);
            App\Deposit::create([
                'user_id'         => $user2->id,
                'deposit_amount'  => 39434.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  5,
                'returns'         =>  39434.00*(5/100),
            ]);
            App\Deposit::create([
                'user_id'         => $user3->id,
                'deposit_amount'  => 8168.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  4,
                'returns'         =>  8168.00*(4/100),
            ]);
             App\Deposit::create([
                'user_id'         => $user4->id,
                'deposit_amount'  => 1368.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  3,
                'returns'         =>  1368.00*(3/100),
            ]);
              App\Deposit::create([
                'user_id'         => $user4->id,
                'deposit_amount'  => 6322.00,
                'active_deposit'  =>  1,
                'paid'            =>  0,
                'plan'            =>  4,
                'returns'         =>  6322.00*(4/100),
            ]);
            
        
        App\Nextofkin::create([
            'user_id'         => $user1->id,
            'name'    => 'Olumelu',
            'phone'    => '+756546577687',
            'email'  => 'Olumelu@gmail.com',
        ]);

        App\Nextofkin::create([
            'user_id'         => $user2->id,
            'name'    => 'tony Olumelu',
            'phone'    => '+756546577687',
            'email'  => 'tonyOlumelu@gmail.com',
        ]);
        App\Nextofkin::create([
            'user_id'         => $user3->id,
            'name'    => 'green Olumelu',
            'phone'    => '+756546577687',
            'email'  => 'green@gmail.com',
        ]);
         App\Nextofkin::create([
            'user_id'         => $user4->id,
            'name'            => 'pola grey',
            'phone'            => '+1 454 657 7687',
            'email'          => 'pola@gmail.com',
        ]);
    }
}

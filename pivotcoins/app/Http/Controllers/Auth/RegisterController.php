<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Balance;
use App\Withdrawal;
use App\Nextofkin;
use App\Deposit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    // protected $redirectTo = route('next-of-kin.create');
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'walletId' => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone_number'   => ['required','string'],
            // 'photo'    => ['sometimes','string','image','max:5000'],
        ]);
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
                    'name'        => $data['name'],
                    'lastname'    => $data['lastname'],
                    'email'       => $data['email'],
                    'walletId'    => $data['walletId'],
                    'phone_number'=> $data['phone_number'],
                    'password'    => Hash::make($data['password']),
                ]);

                // dd($data);
            // Balance::create([
            //         'user_id'               => $user->id,
            //         'balance'               => 0.00,
            //     ]);

            Deposit::create([
                    'user_id'                => $user->id,      
                    'deposit_amount'         =>  0.00, 
                    'active_deposit'         =>  1,
                    'paid'                   =>  0,
                    'plan'                   =>  0,
                    'returns'                =>  0.00,
                    // 'balance'                =>  0.00
                    // 'active_deposit'
                ]);
            Withdrawal::create([
                    'user_id'                => $user->id,
                    'withdrwal_amount'       => 0.00,

                ]);
            Nextofkin::create([
                    'user_id'                 => $user->id,
                    'name'                    => '',
                    'email'                   => '',
                    'phone'                   => '',
                ]);


         return $user;
    }
}

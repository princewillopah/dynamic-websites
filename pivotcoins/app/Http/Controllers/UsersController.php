<?php

namespace App\Http\Controllers;


use App\Admin;
use App\Deposit;
use App\Mail\PayoutFormMail;
use App\Notifications\payoutNotification;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }

    //     public function location()
    // {
    //     // Route::get('get-location-from-ip',function(){
    //         $ip= \Request::ip();
    //         $data = \Location::get($ip);
    //         // dd($data);
    //     // });

    //     return view('home')->with('location',$data );
                            
        
    // }

    public function dashboard()
    {

        return view('admin.admin.dashboard')
                            ->with('investors',User::all())
                            ->with('deposits',Deposit::count())
                            ->with('withdrawals',Withdrawal::all());
        
    }


    public function index()
    {
        $user = User::all();
        return view('admin.admin.members')->with('users',$user);
                                    
    }
    public function show($user_id)
    {
        $user = User::find($user_id);
        // $deposit = Deposit::where('user_id',$user)->first();
        $balance = Deposit::where('user_id', $user_id)->sum('deposit_amount');
         $last_deposit= optional(Deposit::where('user_id',$user_id)->where('active_deposit',1))->first();

         $totalWithdrawal = Withdrawal::where('user_id', $user_id)->sum('withdrwal_amount');
         $last_withdrawal = optional(Withdrawal::where('user_id',$user_id))->first();

        return view('admin.admin.show') ->with('user',$user)
                                         ->with('last_deposit',$last_deposit) ->with('balance',$balance)
                                         ->with('last_withdrawal',$last_withdrawal) ->with('totalWithdrawal',$totalWithdrawal)
                                        ;                      
    }
    public function alldeposits()
    {
        
        return view('admin.admin.all-deposits')->with('all_deposits', Deposit::all());
                                    
    }
      public function allwithdrawals()
    {
        
        return view('admin.admin.all-withdrawals')->with('all_withdrawals', Withdrawal::all());
                                    
    }

    public function member_deposit_index($member_id)
    {
        $deposits = Deposit::where('user_id', $member_id)->get();
        $totalDeposit = Deposit::where('user_id', $member_id)->sum('deposit_amount');
        $depositor  = User::find($member_id);
        $withdrawerer = User::find($member_id);
        $withdraws = Withdrawal::where('user_id', $member_id)->get();
        $totalWithdraws = Withdrawal::where('user_id', $member_id)->sum('withdrwal_amount');
        // return view('admin.admin.showDeposit', compact('deposits', 'user_id'));
        return view('admin.admin.showDeposit')->with('user_id',$member_id)
                                               ->with('depositor',$depositor)->with('deposits',$deposits)->with('totalDeposit',$totalDeposit)
                                               ->with('withdrawerer',$withdrawerer)->with('withdraws',$withdraws)->with('totalWithdraws',$totalWithdraws);
    }
    // public function member_deposit_create($member_id)
    // {
    //     $deposits = Deposit::where('user_id', $member_id)->get();
    //     // $depositor = User::find($member_id);
    //     return view('admin.admin.createDeposit')->with('deposits',$deposits)->with('user_id',$member_id);
    //     // ->with('depositor',$depositor);
    // }
    // public function member_deposit_store($member_id)
    // {
    //     $deposits = Deposit::where('user_id', $member_id)->get();
    //     $depositor = User::find($member_id);
    //     // return view('admin.admin.showDeposit', compact('deposits', 'user_id'));
    //     return view('admin.admin.showDeposit')->with('deposits',$deposits)->with('user_id',$member_id)->with('depositor',$depositor);
    // }

        public  function makeInactive(User $user, Deposit $deposit){
                // $user = User::find($id);
                $deposit->active_deposit = 0;
                $deposit->save();
                return redirect()->back();
            }
            public  function makeActive(User $user, Deposit $deposit){
                // $user = User::find($id);
                $deposit->active_deposit = 1;
                $deposit->save();
                return redirect()->back();
            }
            public  function pay(Request $request,User $user, Deposit $deposit){
               // User::find($user->id)->notify(new payoutNotification());
              // $user = User::find($user);
              // $userr = User::where('id',$user)->first();
              //  $userr->notify(new payoutNotification($userr));
               // $userr = User::where('user_id',$user->id)->where('id',$deposit->id)->first();

               // $user->notify(new payoutNotification);
              // foreach ($deposit->user as $userr) {
                  // $userr->notify(new payoutNotification);
              // }
                 // $deposit->user->notify(new payoutNotification($deposit->user));
               // $user->notify(new payoutNotification($user));
               // $userr->notify(new payoutNotification($userr));
               Mail::to($user)->send(new PayoutFormMail($user,$deposit));

                $deposit->paid = 1;
                $deposit->save();

                return redirect()->back()->with('success','messege sent to '.$deposit->user->name.' right away');// add success message
            }
             public  function cancel(User $user, Deposit $deposit){
                $deposit->paid = 0;
                $deposit->save();
                return redirect()->back();
            }

    public function member_deposit_store(Request $request, User $user)
    {
        
           $request->validate([
                'deposit_amount'     =>  'required',
            ]);
           $returns = 0;
           $plan = 0;
             if($request->deposit_amount <= 5000){
               $plan = 3;
              $returns = $request->deposit_amount*($plan/100.0);
             }
            elseif($request->deposit_amount <= 19000){
              $plan = 4;
              $returns = $request->deposit_amount*($plan/100.0);
            }else{
              $plan = 5;
              $returns = $request->deposit_amount*($plan/100.0);
            }
          $deposit                 = new Deposit();
          $deposit->user_id        = $user->id;
          $deposit->deposit_amount = $request->deposit_amount;
          $deposit->plan           = $plan;
          $deposit->returns        = $returns;
     
          $deposit->save();
    
        return redirect()->route('member.deposit.index',  $user);
    }

    public function member_deposit_update($member_id,$deposit_id, Request $request)
    {
        $request->validate([
            'deposit_amount'     =>  'required',
        ]);

          // $deposit =  Deposit::find($member_id)->find($deposit_id);
         $deposit =  Deposit::where('user_id',$member_id)->where('id',$deposit_id)->first();

           $returns = 0;
           $plan = 0;
             if($request->deposit_amount <= 5000){
               $plan = 3;
              $returns = $request->deposit_amount*($plan/100.0);
             }
            elseif($request->deposit_amount <= 19000){
              $plan = 4;
              $returns = $request->deposit_amount*($plan/100.0);
            }else{
              $plan = 5;
              $returns = $request->deposit_amount*($plan/100.0);
            }
        
          $deposit->deposit_amount = $request->deposit_amount;
          $deposit->plan           = $plan;
          $deposit->returns        = $returns;
          $deposit->save();
    
        return redirect()->route('member.deposit.index', $member_id);
    }


    public function member_deposit_destroy($member_id,$deposit_id)
    {
        // $deposit =  Deposit::find($member_id)->find($deposit_id);
        $deposit =  Deposit::where('user_id',$member_id)->where('id',$deposit_id);
        // if($deposit->count() == 1 ){

        //       return redirect()->route('member.deposit.index', $member_id)->with('success','you cant delete the only deposit. change to zeros');
                                                                  
        // }else{
             $deposit->delete();
            
        return redirect()->route('member.deposit.index', $member_id)->with('success','deposit successfully deleted');
      // }
    }
    public function destroy($user_id)
    {
        
        // $user =  User::where('user_id',$user_id);
         $user =  User::find($user_id);//find d user via the id

        
//        first delete all deposits by the user
        foreach ($user->deposits as $d){
            $d->delete();//delete each deposit
        }//
        // first delete all withdrawals by the user
        foreach ($user->withdrawals as $w){
            $w->delete();//delete each withdrawals
        }
      

        $user->next_of_kin->delete();//delete the one on one nest of kin relationship
        //then delete the user
        $user->delete();
            
        return redirect()->back()->with('success','Record successfully deleted');
       
    }
    // -------------------------------------------------------------------------------------------

        public function member_withdraw_store(Request $request, User $user)
    {
        
           $request->validate(['withdrwal_amount'     =>  'required',]);
          $withdrawal                               = new Withdrawal();
          $withdrawal->user_id                      = $user->id;
          $withdrawal->withdrwal_amount             = $request->withdrwal_amount;
          $withdrawal->save();
    
        return redirect()->route('member.deposit.index',  $user);
    }

    public function member_withdrawal_update(Request $request, $userid, $withdralwid)
    { 
        $request->validate(['withdrwal_amount'     =>  'required',]);
        $withdrawal =  Withdrawal::where('user_id',$userid)->where('id',$withdralwid)->first();
        $withdrawal->withdrwal_amount             = $request->withdrwal_amount;
        $withdrawal->save();
        return redirect()->route('member.deposit.index',  $userid);
    }

     public function member_withdrawal_destroy($member_id,$withdrawal_id)
    {
        $withdrawal =  Withdrawal::where('user_id',$member_id)->where('id',$withdrawal_id);
        $withdrawal->delete();    
        return redirect()->route('member.deposit.index', $member_id)->with('success','deposit successfully deleted');
    }

}

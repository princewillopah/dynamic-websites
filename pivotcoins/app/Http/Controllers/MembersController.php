<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportFormMail; 
use App\Mail\DepositNotificationFormMail;
use App\Mail\WithdrawalRequestFormMail;
use App\NextOfkin;
use App\Deposit;
use App\Withdrawal;


class MembersController extends Controller
{
     public function __construct()
    {
        // $this->middleware(['auth' => 'verified']);
        $this->middleware('auth');
    }
    


     public function deposit()
    {
        return view('admin.members.deposits')
                     ->with('user', Auth::user());                      
    }
      public function withdrawal()
    {
        return view('admin.members.withdrawals')
                     ->with('user', Auth::user());                      
    }

     public function support()
    {
        return view('admin.members.support')
                     ->with('user', Auth::user());                      
    }
     public function all_deposits()
    {
        return view('admin.members.all-deposits')
                     ->with('user', Auth::user())
                     ->with('all_deposits',Deposit::where('user_id',Auth::id())->get());                    
    }
     public function all_withdrawals()
    {
        return view('admin.members.all-withdrawals')
                     ->with('user', Auth::user())
                      ->with('all_withdrawals',Withdrawal::where('user_id',Auth::id())->get());                  
    }
     public function nextofkin()
    {
         return view('admin.members.ntxt-of-kin')
                     ->with('user', Auth::user());                      
    }
     public function nextofkinedit($user_id,$nfk_id)
    {
      // $user = Nextofkin::where('user_id',Auth::id())->where('id',$nfk_id)->first();
          $nfk = Nextofkin::where('user_id',$user_id)->where('id',$nfk_id)->first();
         return view('admin.members.nextofkin')
                     ->with('nxtfkn', $nfk);                      
    }

  public function nextofkin_store(Request $request,$user_id, $id)
    {      $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email',],
            'phone'    => ['required', 'string', 'max:255'],
        ]);

          $kin = NextOfkin::find($id);
          $kin->user_id =  $user_id;
          $kin->name    =  $request->name;
          $kin->phone   =  $request->phone;
          $kin->email   =  $request->email;
          $kin->save();
        return redirect()->route('nxtfkin')->with('success',' Next Of Kin Updated Successfully');                  
    }


     public function support_store(Request $request)
    {
        $this->validate($request, [
            'message'        =>'required',
        ]);
        // $data = request()->validate([ 'message'=>'required',]);
        // $data = Auth::user();
        // $data = $request->message;

        // Mail::to('support@pivotcoins.trade')->send(new SupportFormMail($data));

        // $request->user()->name;
         Mail::to('support@pivotcoins.trade')->send(new SupportFormMail($request));
        return redirect()->back()->with('success','Thank you, '.$request->name.', We will get back to you shortly.');                     
    }
     public function deposit_notification_store(Request $request)
    {
    
         Mail::to('support@pivotcoins.trade')->send(new DepositNotificationFormMail($request));
        return redirect()->back()->with('success','Thank you, '.$request->name.', We will get back to you shortly.');                     
    }

    public function withdrawal_request_store(Request $request)
    {
        $this->validate($request, [
                'amount'        =>'required',
        ]);

         Mail::to('support@pivotcoins.trade')->send(new WithdrawalRequestFormMail($request));
        return redirect()->back()->with('success','Request received, '.$request->name.', Your account will be credited very soon .');                     
    }


    
    public function profile()
    {
        return view('admin.admin.profile')->with('user', Auth::user());                      
    }



    public function profileEdit()
    {
        $user = Auth::user();
        return view('admin.admin.profile-edit')->with('user', $user);                      
    }

    public function profileupdate(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'walletId' => ['required', 'string', 'max:255'],
            // 'phone'    => ['required', 'string', 'max:255'],
            'photo'    => ['sometimes','file','image','max:5000'],
	    ]);
        // $user = User::find(Auth::id(),$id);
$user = Auth::user();
        if($request->hasFile('avatar')){
            $myavatar = $request->file('avatar');
            $file_name = time().'-'. $user->name.'-'. $myavatar->getClientOriginalName();
            Image::make($myavatar)->resize(300, 200)->save(public_path('/uploads/'.$file_name));
	        // $myimage->move('uploads/images',$file_name);
            // $formInput['image'] = $file_name;
            $user->photo = $file_name;
            $user->save();
        }
        // $user->update([
        //     $user->name = $request->name,
        //     $user->lastname = $request->lastname,
        //     $user->phone = $request->phone,
        //     $user->walletid = $request->walletid,
        // ]);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone_number = $request->phone_number;
        $user->walletId = $request->walletId;
        $user->save();

        return redirect()->route('profile');                      
    }


}

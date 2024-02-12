<?php

namespace App\Http\Controllers;
// use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Http\Request;

class FlutterwaveController extends Controller
{
    


    public function verify_payment(Request $request){
       
              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transactionId}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK_TEST-17686b90e1e500cf0ad75e0d2302b947-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
            //   echo $response;
            $res = json_decode($response);
          
              return [$res];//SEND THIS TO AJAX FRONTEND
    }

    public function verify_payment_success(){
       
  
        return 'hey';//SEND THIS TO AJAX FRONTEND
}


////////////////////throught package /////////////////////////////////////////
// /**
//      * Initialize Rave payment process
//      * @return void
//      */
//     public function initialize()
//     {
//         //This generates a payment reference
//         $reference = Flutterwave::generateReference();

//         // Enter the details of the payment
//         $data = [
//             'payment_options' => 'card,banktransfer',
//             'amount' => 5000,
//             'email' => request()->email,
//             'tx_ref' => $reference,
//             'currency' => "NGN",
//             'redirect_url' => route('callback'),
//             'customer' => [
//                 'email' => request()->email,
//                 "phone_number" => request()->phone,
//                 "name" => request()->name
//             ],

//             "customizations" => [
//                 "title" => 'Movie Ticket',
//                 "description" => "20th October"
//             ]
//         ];

//         $payment = Flutterwave::initializePayment($data);


//         if ($payment['status'] !== 'success') {
//             // notify something went wrong
//             return;
//         }

//         return redirect($payment['data']['link']);
//     }

//     /**
//      * Obtain Rave callback information
//      * @return void
//      */
//     public function callback()
//     {
        
//         $status = request()->status;

//         //if payment is successful
//         if ($status ==  'successful') {
        
//         $transactionID = Flutterwave::getTransactionIDFromCallback();
//         $data = Flutterwave::verifyTransaction($transactionID);

//         dd($data);
//         }
//         elseif ($status ==  'cancelled'){
//             //Put desired action/code after transaction has been cancelled here
//         }
//         else{
//             //Put desired action/code after transaction has failed here
//         }
//         // Get the transaction from your DB using the transaction reference (txref)
//         // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
//         // Confirm that the currency on your db transaction is equal to the returned currency
//         // Confirm that the db transaction amount is equal to the returned amount
//         // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
//         // Give value for the transaction
//         // Update the transaction to note that you have given value for the transaction
//         // You can also redirect to your success page from here

//     }






}




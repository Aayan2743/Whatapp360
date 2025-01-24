<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;
//use app\Models\otp;
use App\Models\otp;
use App\Models\messagecount;
use App\Http\Helper;

class CustomerController extends Controller
{
    //

    public function create(){
        return view('addCustomer');
    }

    public function test(){
        dd("dfghdfg");
    }

    public function profile(){
        dd("dfgjkghdkfjghkdfjh");
    }

    public function sendOtp(Request $request){
        $rules = [
            'phone' => 'required|digits:10',
            // 'Otp' => 'required|digits:4',
   
               ];

   // Step 2: Custom Error Messages (Optional)
   $messages = [
       'phone.required' => 'The phone number is required.',
    //    'Otp.required' => 'The Otp number must be required.',
       
     
   ];

   // Step 3: Validate Data
   $validator = Validator::make($request->all(), $rules, $messages);

   if ($validator->fails()) {
       // Custom failed validation response
       throw new HttpResponseException(
           response()->json([
               'status' => false,
               'message' => 'Validation Errors',
               'errors' => $validator->errors(),
           ], 422)
       );
   } 
             $min=1;
              $expiresAt = now()->addMinutes($min);
        //      $otp=rand(1111,9999);
        //        $create_otp=otp::create([
        //            'Otp'=>$otp,
        //            'phone'=>$request->phone,   
        //            'apiKey'=>env('360'),
        //            'expires_at' => $expiresAt,   
   
        //        ]);
        //    dd(Helper::test($otp,$request->phone,$min));   



        $check = otp::where('phone', $request->phone)
        ->where('apiKey', env('360'))
        ->where('status', 1)
        ->where('expires_at', '>', now()) // Check if the OTP has not expired
        ->value('Otp');

  // dd($check);
  
    if($check==null){
        $otp=rand(1111,9999);
            $create_otp=otp::create([
                'Otp'=>$otp,
                'phone'=>$request->phone,   
                'apiKey'=>env('360'),
                'expires_at' => $expiresAt,   

            ]);
        $msgDetails=Helper::test($otp,$request->phone,$min);
       // dd($msgDetails);
        $msg_count=messagecount::create([
             'message'=>$msgDetails,   
             'phone'=>$request->phone,   
             'apiKey'=>env('360'),   

        ]);
    }else{



        $msgDetails=Helper::test($check,$request->phone,$min);
       // dd($msgDetails);
        $msg_count=messagecount::create([
            'message'=>$msgDetails,   
            'phone'=>$request->phone,   
            'apiKey'=>env('360'),   

       ]);
    }

    

    




   // dd($create_otp);

  
      
    }

}

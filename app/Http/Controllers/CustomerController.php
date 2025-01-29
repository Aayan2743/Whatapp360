<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;
//use app\Models\otp;
use App\Models\otp;
use App\Models\userapikey;
use App\Models\messagecount;
use App\Http\Helper;
use Illuminate\Support\Facades\Crypt;


class CustomerController extends Controller
{
    //

    public function create(){

       $api_key=userapikey::where('user_id',Auth()->user()->id)->get();

       return view('addCustomer',compact('api_key'));
    }

    public function test(){
        dd("dfghdfg");
    }




    public function profile(){
        dd("dfgjkghdkfjghkdfjh");
    }

    public function verifyOtp(Request $request){
        $rules = [
            'phone' => 'required|digits:10',
            'Otp' => 'required|digits:4',
   
               ];

               $messages = [
                'phone.required' => 'The phone number is required.',
                 'Otp.required' => 'The Otp number must be required.',
            ];
            
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


            otp::where('expires_at', '<', now())->delete();
            $ip = request()->header('X-Forwarded-For') ?? request()->ip();
            $exists=otp::where('Otp',$request->Otp)->where('phone',$request->phone)->where('ip',$ip)->count();
           // dd($exists);
            if($exists==0){
                return response()->json([
                    'status'=>false,
                    'message'=>'Invalid OTP or OTP expired',
                ]);
            }else{

                otp::where('Otp',$request->Otp)->where('phone',$request->phone)->delete();
                return response()->json([
                    'status'=>true,
                    'message'=>'Otp Verified',
                ]);
            }


    }

     public function storeApiKey(Request $req){

            $validatedate=Validator::make($req->all(),[
                'api_key' => 'required|string|max:255',    
            ],
            [
                'api_key.required' => 'The API Key is required.',
                'api_key.string'   => 'The API Key must be a string.',
                'api_key.max'      => 'The API Key must not exceed 255 characters.',
            ]
            );

            if ($validatedate->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validatedate->errors()->first()
                ], 200);
            }    

             try{
                $check_already_exist=userapikey::where('user_id',Auth()->user()->id)->count();

                $encryptedApiKey = Crypt::encryptString($req->api_key);
              
                 $storeKey = userapikey::updateOrCreate(
                    ['user_id' => Auth()->user()->id], // Condition: Check if user_id exists
                    ['key' => $encryptedApiKey]   // Update or create with this data
                );
                 
                 return response()->json(['status' => true, 'message' => 'API Key Updated successfully']);
                 
             }catch(\Exception $e){
                return response()->json(['status'=>false, 'message'=>$e->getMessage()]);

             }   

     }   

   


    public function sendOtp(Request $request){
        $rules = [
            'phone' => 'required|digits:10',
             'Key' => 'required|exists:userappkeys,key' 
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
               
               'message' => $validator->errors()->first(),
           ], 422)
       );
   } 
             $min=3;
              $expiresAt = now()->addMinutes($min);
           // dd($request->Key);
            $getWhatappKey=userapikey::where('key',$request->Key)->value('key');

            //dd($getWhatappKey);

        $check = otp::where('phone', $request->phone)
        ->where('apiKey', env('360'))
        ->where('status', 1)
        ->where('expires_at', '>', now()) // Check if the OTP has not expired
        ->value('Otp');

  // dd($check);
    otp::where('expires_at', '<', now())->delete();
    $ip = request()->header('X-Forwarded-For') ?? request()->ip();
    if($check==null){
        $otp=rand(1111,9999);
        $msgDetails=Helper::test($otp,$request->phone,$min,$getWhatappKey);
            $create_otp=otp::create([
                'Otp'=>$otp,
                'phone'=>$request->phone,   
                'apiKey'=>env('360'),
                'expires_at' => $expiresAt,   
                'ip' => $ip,   

            ]);
       
       // dd($msgDetails);
        $msg_count=messagecount::create([
             'message'=>$msgDetails,   
             'phone'=>$request->phone,   
             'apiKey'=>env('360'),   
             'ip'=>$ip,   

        ]);

        return response()->json([
            'status'=>true,
            'Auth_key'=>$msgDetails
        ]);


    }else{



        $msgDetails=Helper::test($check,$request->phone,$min,$getWhatappKey);
       // dd($msgDetails);
        $msg_count=messagecount::create([
            'message'=>$msgDetails,   
            'phone'=>$request->phone,   
            'apiKey'=>env('360'),   
            'ip'=>$ip,   
       ]);

       return response()->json([
        'status'=>true,
        'Auth_key'=>$msgDetails
    ]);
    }

    

    




   // dd($create_otp);

  
      
    }

}

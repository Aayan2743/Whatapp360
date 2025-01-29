<?php
namespace App\Http;

use GuzzleHttp\Client;

class Helper
{
  
   public static function test($otp,$mobile,$expires_min,$key)
    {

      $message = "Your OTP is: $otp. Please do not share it with anyone, as it will expire in $expires_min minutes.";
      
  
      $curl = curl_init();

      curl_setopt_array($curl, [
          // CURLOPT_URL => "https://api.360messenger.com/sendMessage/PAi5DW7jsM7E0qoE6zzyeKP4ClK7foKJtOr",
          CURLOPT_URL => "https://api.360messenger.com/sendMessage/".$key,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_POST => true,
          CURLOPT_POSTFIELDS => [
              "phonenumber" => $mobile,
              "text" => $message,
              //"url" => "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example",
          ],
      ]);

      $response = curl_exec($curl);

      if (curl_errno($curl)) {
          echo "cURL Error: " . curl_error($curl);
      } else {

          return $response;
         // echo "Response: " . $response;
      }

      curl_close($curl);




    }
    
    public static function sendOtp1($mobile, $otp, $templateId)
{
    $authKey = env('MSG91_AUTH_KEY'); // Your MSG91 auth key
    $url = "https://control.msg91.com/api/v5/otp";

    // Initialize cURL
    $curl = curl_init();

    // Prepare the URL with dynamic parameters
    $fullUrl = $url . "?otp={$otp}&otp_expiry=5&template_id={$templateId}&mobile={$mobile}&authkey={$authKey}&realTimeResponse=1";

    curl_setopt_array($curl, [
        CURLOPT_URL => $fullUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
    ]);

    // Execute the cURL request
    $response = curl_exec($curl);
    $err = curl_error($curl);

    // Close cURL
    curl_close($curl);

    // Handle errors or return the response
    if ($err) {
        return [
            'error' => true,
            'message' => $err,
        ];
    }

    return json_decode($response, true);
}

    
    
    
    
    public static function sendOtp($mobile){
        


$curl = curl_init();


$Otp = rand(1000, 9999); 

$templateid=env('MSG91_TEMPLATE_ID');
$keyMsg91=env('MSG91_AUTH_KEY');

curl_setopt_array($curl, [
  CURLOPT_URL => "https://control.msg91.com/api/v5/otp?otp={$Otp}&otp_expiry=5&template_id={$templateid}&mobile={$mobile}&authkey={$keyMsg91}&realTimeResponse=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"Param1\": \"value1\",\n  \"Param2\": \"value2\",\n  \"Param3\": \"value3\"\n}",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/JSON"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}













//          $authKey = env('MSG91_AUTH_KEY');
//         $senderId = env('MSG91_SENDER_ID');
//          $templateId = env('MSG91_TEMPLATE_ID2');
//         $url = "https://api.msg91.com/api/v5/otp";
        
//         $otp=1234;    
//         $client = new Client();
    
//       try {
//     $response = $client->post($url, [
//         'headers' => [
//             'authkey' => $authKey,
//         ],
//         'json' => [
//             'mobile' => $mobile,
//             'otp' => $otp,
//             'sender' => $senderId,
//             'template_id' => $templateId,
//             'otp_expiry' => 10,
//         ],
//     ]);

//     $statusCode = $response->getStatusCode(); // Check HTTP status code
//     $responseBody = json_decode($response->getBody(), true);

//     if ($statusCode !== 200 || isset($responseBody['error'])) {
//         \Log::error('MSG91 API Error:', [
//             'status_code' => $statusCode,
//             'response' => $responseBody,
//         ]);
//         return [
//             'error' => true,
//             'message' => $responseBody['message'] ?? 'Unknown error',
//         ];
//     }

//     return $responseBody;
// } catch (\GuzzleHttp\Exception\RequestException $e) {
//     \Log::error('Request Exception: ' . $e->getMessage());
//     return [
//         'error' => true,
//         'message' => $e->getMessage(),
//     ];
// } catch (\Exception $e) {
//     \Log::error('General Exception: ' . $e->getMessage());
//     return [
//         'error' => true,
//         'message' => $e->getMessage(),
//     ];
// }


        
        
        
      //  dd($mobile,$Otp);
        
    }
    
    
    
    public static function verifyOtp($mobile,$otp){
        
    

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://control.msg91.com/api/v5/otp/verify?otp={$otp}&mobile={$mobile}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "authkey: 436223Atnm6DmuFf675a6b3bP1"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
        
        
    }
    

    public static function test1($phone,$message)
    {
       
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>'https://api.360messenger.net/sendMessage/'.env('360MESSANGER_KEY'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message,'url' => 'https://reach.com.in/grace/public/uploads/all/4jt3Vs7IaFrNufxJEoAmAaufukhwhg9oYTJVpNTI.png'),
          CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
     
    }
    
    
     public static function create_user($phone,$name,$mail,$password)
    {
       
       $message="Hi $name,

            Welcome to [Your Company/Service Name]!
            
            Here are your login credentials:
            ðŸ“§ Email ID: $mail
            ðŸ”‘ Password: $password
            
            Please keep your credentials secure and do not share them with anyone. If you have any questions or need assistance, feel free to contact us.
            
            Best regards,
            Pixl

";
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>'https://api.360messenger.net/sendMessage/'.env('360MESSANGER_KEY'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message,'url' => 'https://reach.com.in/grace/public/uploads/all/4jt3Vs7IaFrNufxJEoAmAaufukhwhg9oYTJVpNTI.png'),
          CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
     
    }
    
    
      public static function create_staff($phone,$name,$mail,$password)
    {
       
       $message="Hi $name,

        Welcome to the [Your Company/Organization Name] team! 🎉
        
        We’re excited to have you on board. Here are your login credentials to get started:
        📧 Email ID: $mail
        🔑 Password: $password
        
        Please use these credentials to access [System/Portal Name]. If you encounter any issues or have questions, feel free to reach out to [Your Name/Support Team].
        
        We look forward to achieving great things together! 🚀
        
        Best regards,
        [Your Name/Your Company/HR Team Name]";
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>'https://api.360messenger.net/sendMessage/'.env('360MESSANGER_KEY'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message,'url' => 'https://reach.com.in/grace/public/uploads/all/4jt3Vs7IaFrNufxJEoAmAaufukhwhg9oYTJVpNTI.png'),
          CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
     
    }
    


      public static function follow_up($phone,$message,$imgPath)
    {
       
       //$message="Hello";
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>'https://api.360messenger.net/sendMessage/'.env('360MESSANGER_KEY'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message,'url' => 'https://reach.com.in/grace/public/uploads/all/4jt3Vs7IaFrNufxJEoAmAaufukhwhg9oYTJVpNTI.png'),
          CURLOPT_POSTFIELDS => array('phonenumber' => $phone,'text' => $message,'url'=>$imgPath),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
     
    }
    



    
    
}
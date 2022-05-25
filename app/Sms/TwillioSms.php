<?php


namespace App\Sms;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
class TwillioSms implements Sms{
    public function send(string $phone, string $message)
    {
        // $sid = ["xxxxxxxxxxxxxx"];
        // $token = "auth-token";
        // $client = new Client($sid,$token);
        // $client->messages->create(
        //     $phone, //to
        //     [
        //         'from'=>'12345456456456',
        //         'body'=>'Good luck jennifer for exam'
        //     ]
        //     );

        Log::info('phone number '.$phone.'Message body from Twillio : '.$message);
    }
}
?>
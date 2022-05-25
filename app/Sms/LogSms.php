<?php


namespace App\Sms;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
class LogSms implements Sms
{
    public function send(string $phone,string $message)
    {
        Log::info('phone number '.$phone.'Message body from Log : '.$message);
    }
}

?>
<?php

namespace App\Console\Commands;

use App\Sms\TwillioSms;
use App\Sms\LogSms;
use App\Sms\Sms;
use Illuminate\Console\Command;


class SendSms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendsms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send SMS';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Sms $sms)
    {
        $phone = '123-123-12345';
        $message= "Message has been sent successfully!";
        $sms->send($phone,$message);
    }
}

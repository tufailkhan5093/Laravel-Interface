<?php

namespace App\Providers;

use App\Sms\TwillioSms;
use App\Sms\LogSms;
use App\Sms\Sms;
use Illuminate\Support\ServiceProvider;

class SmsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $provider = match(env('SMS_DRIVER'))
        {
            'twillio'=>TwillioSms::class,
            'log'=>LogSms::class,
            default=>LogSms::class
        };
        $this->app->bind(Sms::class,$provider);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
   
}

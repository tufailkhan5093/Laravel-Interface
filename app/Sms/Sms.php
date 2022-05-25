<?php

namespace App\Sms;

interface Sms
{
    public function send(string $phone , string $message);
}



?>
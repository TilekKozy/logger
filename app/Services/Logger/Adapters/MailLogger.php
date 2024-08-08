<?php

namespace App\Services\Logger\Adapters;

use App\Services\Logger\Interfaces\LoggerAdapterInterface;
use Illuminate\Support\Facades\Mail;

class MailLogger implements LoggerAdapterInterface
{

    public function log(string $message): void
    {
        Mail::send(
            view: 'emails.log',
            data: ['messageContent' => $message],
            callback: function($message){
                $message->to('tilek970122@gmail.com')
                    ->subject('Logs');
            });
    }
}

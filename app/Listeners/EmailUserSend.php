<?php

namespace App\Listeners;

use App\Events\mandaEmail;
use App\Mail\mailTeste;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailUserSend implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(mandaEmail $event): void
    {
        
        $clientes = [
            "0"=> "dasdas@asd.com",
            "1"=> "dasdsas@asd.com",
            "2"=> "dasssdas@asd.com",
            "3"=> "dasssdas@asd.com",
            "4"=> "dasssdas@asd.com",
            "5"=> "dasssdas@asd.com",
            "6"=> "dasssdas@asd.com",
            "7"=> "dasssdas@asd.com",
        ];
        foreach ($clientes as $key => $value) {
            $when = now()->addSeconds($key * 5);
            Mail::to($value)->later($when,new mailTeste());
        }
    }
}

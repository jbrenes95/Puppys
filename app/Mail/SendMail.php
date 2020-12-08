<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{


    public $data;
    public function __construct($data)
    {
        $this->data =$data;
    }

    public function build()
    {

        return $this->with('data',$this->data)
                    ->view('mail')
                    ->subject('Recordatorios');


    }
}

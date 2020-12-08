<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){

        Mail::to($request->email)->send(new SendMail($request));
        return"Mail mandado con exito";

    }
}

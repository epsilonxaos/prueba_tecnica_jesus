<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send_mail(Request $request){
        Mail::to('wilberthg16@gmail.com') -> send(new MailSend($request -> toArray()));

        return redirect() -> back() -> with('message', 'Mensaje enviado');
    }
}

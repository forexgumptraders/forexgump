<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        return view ('home.trading-ai');
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',

        ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('eljirafo97@gmail.com')->send($correo);
        return redirect()->route('home.trading-ai')->with('info', 'Te responderemos cuanto antes');
    }
}

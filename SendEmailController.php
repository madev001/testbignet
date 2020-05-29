<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendMailClient;
use Illuminate\contract\Mailer;

class SendEmailController extends Controller
{
    //
    function index()
    {
    	return view('contacter');
    }

    function send(Request $request)
    {
    	$this->validate($request,
            [
          'nom'     =>   'required',
          'email'   =>   'required|email',
          'message' =>   'required',
          'gsm'     =>   'required',
          
          
            ]
    	);
    	$data = array(
            'nom'      => $request->nom,
            'message'  => $request->message,
            'email'    => $request->email,
            'gsm'      => $request->gsm,
            'surface'  => $request->surface
    	);

    	

    	Mail::to('marocoujdamouad@gmail.com')->send(new SendMail($data));
    	//Mail::to($data['email'])->send(new SendMailClient($data));
    	return back()->with('success', 'merci pour votre message !');
  

    	
    	

    	
    	
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\devisMail;
use App\Mail\SendMailClient;
use Illuminate\contract\Mailer;

class devisController extends Controller
{
	function index()
    {
    	return view('devis');
    }

    function send(Request $request)
    {
    	$this->validate($request,
            [
          'nom'     =>   'required',
          'email'   =>   'required|email',
          'gsm'     =>   'required',
          
          
            ]
    	);
    	$data = array(
            'nom'      => $request->nom,
            'message'  => $request->message,
            'email'    => $request->email,
            'gsm'      => $request->gsm,
            'surface'  => $request->surface,
            'type'     => $request->type
    	);

    	

    	Mail::to('marocoujdamouad@gmail.com')->send(new devisMail($data));
    	Mail::to($data['email'])->send(new SendMailClient($data));
    	return back()->with('success', 'merci pour votre demande !');
  

    	
    	

    	
    	
    }

    //
}

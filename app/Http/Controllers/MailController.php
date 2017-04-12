<?php

namespace Refugio\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
    
    
    public function getContactenos() {

        
  return view('layouts.contactenos');


                   
                            return redirect()->route('auth.login');

	}

    public function postContactenos(Request $request){
        
        
            $data = array(
            'name' => $request->name,
			'email' => $request->email,
            'accion' =>$request->accion,
			'bodyMessage' => $request->get('message')
			);
        
    
        
        Mail::send(['text'=>'mail'], $data, function($message) use ($data){
            $message->to('refugiomaster3@gmail.com')->subject('Una persona está solicitando información');
            $message->from($data['email'],$data['name']);
            $message->replyTo($data['email'],$data['name']);

        });

        
        $request->session()->flash('flash_message', 'Gracias por enviar su mensaje, pronto nos comunicaremos.');
        
            return redirect('/');
        
    }
    

        
}

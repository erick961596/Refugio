<?php

namespace Refugio\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailAdopcion extends Controller
{
    
        public function getAdopcion() {
		return view('layouts.adopcion');
	}

    public function postAdopcion(Request $request){
        
            $data = array(
            'name' => $request->name,
			'email' => $request->email,
			'bodyMessage' => $request->get('message'),
            'accion' => $request->accion,
            'mascota' => $request->mascota,
            'phone' =>$request->phone,
			);
        
    
         

         Mail::send(['text'=>'mail'], $data, function($message) use ($data){
                    $message->to('refugiomaster3@gmail.com')->subject('Ha recibido una solicitud de adopción');
                    $message->from($data['email'],$data['name']);
                    $message->replyTo($data['email'],$data['name']);
                });
                
                $request->session()->flash('flash_message', 'Gracias por enviar su solicitu de adopción, pronto nos comunicaremos.');
                return redirect('/');
            }


       
    
}

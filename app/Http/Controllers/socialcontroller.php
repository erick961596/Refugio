<?php

namespace Refugio\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
class socialcontroller extends Controller
{
    //

       public function redirect(){

		return Socialite::driver('facebook')-> redirect();
	 }

    public function callback(){

    	$user=Socialite::diver('facebook')-> user();

    	return ($user->getAvatar());
    }
}

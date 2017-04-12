<?php

namespace Refugio\Http\Controllers;

use Illuminate\Http\Request;

use Refugio\Animal;


class AnimalController extends Controller
{
    public function getIndex(){

    	$animal=Animal::all();
    	
    	return view('layouts.catalogo',['animal'=>$animal]);
    }
}

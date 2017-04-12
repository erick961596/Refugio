<?php

namespace Refugio\Http\Controllers;

use Illuminate\Http\Request;

use Refugio\Animal;


class AdopcionController extends Controller
{
    public function adopcion($id)
    {
    	      $datos = Animal::find($id);
    	      return view('layouts.adopcion',['info'=>$datos]);
                   
    }
}

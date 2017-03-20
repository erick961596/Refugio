<?php

namespace Refugio;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['imagePath', 'nombre', 'descripcion'];
}

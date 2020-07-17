<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table= "marcas";
    protected $primaryKey = 'idMarca';
    public $timestamps=false;
    public $guarded=[];
}

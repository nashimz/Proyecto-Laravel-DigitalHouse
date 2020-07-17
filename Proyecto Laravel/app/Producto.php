<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Producto extends Model
{
    public $table = "productos";
    public $primaryKey = "idProducto";
    public $timestamps = false;
    public $guarded=[];

    // public function getNombreCompletoYprecio(){
    //    return $this->productName . " " . $this->price;
    // }
    public function getMarca()
    {
        return $this->belongsTo('App\Marca', 'idMarca', 'idMarca');
    }
    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCategoria');
    }
}

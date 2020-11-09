<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable = [
        'nonmbre', 
        'precio',
        'id_producto',
        'cantidad',
    ];

    public static function validationRules(){
        return[
            'nombre' =>'requeried| min:5 |max:50',
            'precio' =>'requeried| interger | min:1 |max:32',
            'id_producto' =>'requeried| interger | min:1 |max:32',
            'cantidad' =>'requeried| interger | min:1 |max:32',
        ];
    } 
}

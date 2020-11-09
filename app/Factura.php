<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $fillable = [
        'fecha', 
        'id_cliente',
    ];

    public static function validationRules(){
        return[
            'fecha' =>'requeried| min:5 |max:50',
            'id_cliente' =>'requeried| interger | min:1 |max:32',
        ];
    }

}


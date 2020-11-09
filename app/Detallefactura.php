<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallefactura extends Model
{
    //
    protected $fillable = [
        'numero_factura', 
        'id_producto',
        'cantidad',

    ];
        public static function validationRules(){
            return[
                'numero_factura'  =>'requeried| min:5 |max:50',
                'id_producto'  =>'requeried| interger | min:1 |max:32',
                'cantidad'  =>'requeried| interger | min:1 |max:32',
            ];
        }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $fillable = [
        'nonmbre'
    ];

    public static function validationRules(){
        return[
            'nombre' =>'requeried| min:5 |max:50',
        ];
    } 
}

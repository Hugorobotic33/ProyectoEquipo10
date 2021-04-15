<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionModel extends Model
{
    //
    protected $table='direccion';
    protected $fillable=[
         'user_id',
        'direccion'
    ];
}

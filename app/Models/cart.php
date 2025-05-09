<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [
        'id_products',
        'id_costumers',
        
    ];
}

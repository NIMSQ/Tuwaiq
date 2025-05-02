<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'stocke',
        'categories_id',
        'image',
        
    ];
    //child table
    //foreign key field
    public function categoy(){

        return $this->belongsTo(Categories::class,'categories_id','id');
    }
}

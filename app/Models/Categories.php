<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'icon',
        
    ];
    //parent table
    //category <------------------>->product; one to many 
    public function products()
    {
        return $this->hasMany(Products::class);
    }

}

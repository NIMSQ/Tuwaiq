<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function GetProuducts(){
        return view('products');
    }
    public function AboutUs(){
        return view('aboutus');
    }
    public function CallUs(){
        return view('callus');
    }
    public function MyProducts(){
        return view('myproducts');
    }
}

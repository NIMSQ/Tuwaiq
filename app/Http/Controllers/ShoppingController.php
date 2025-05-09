<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Products;
use Illuminate\Support\Facades\DB;
class ShoppingController extends Controller
{
    //
    public function Welcome(){
        return view('shopping.welcome');
    }
    public function List($categories_id){
       
        $data = DB::table('products')
        ->where('categories_id', '=' ,$categories_id )
        ->get();
        return view('shopping.list',['products'=>$data]);
    }
    public function GetCategories(){

        $x = 100; //local
        session()->put('myKey',$x);
        $data = DB::table('categories')
        ->get();
        return view('shopping.welcome',['categories'=>$data]);
    }
    public function pay(Request $request){
        $costumers = [
        'name'=>$request->name,
        'phone'=>$request->phone
        ];
        DB::table('customers')->insert($costumers);
        $cart = [
        'id_products'=>session()->get('product_id'),
        'id_costumers'=>$request->phone,
        ];
        DB::table('cart')->insert($cart);


        return view('shopping.invoice');
    }
    public function CheckOut(){
        return view('shopping.checkout');
    }
    public function Add_To_Cart(){
        $count = session()->get('count',0);
        $count++;
        session()->put('count',$count);
        session()->put('product_id',1);


        return redirect()->back();
    }
    public function Details($product_id){
        $product = DB::table('products')
            ->where('id','=',$product_id)
            ->first();
            // dd($product);
        return view('shopping.details',['product'=>$product]);
    }

}

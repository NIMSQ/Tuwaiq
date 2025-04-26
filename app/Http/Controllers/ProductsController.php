<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class ProductsController extends Controller
{
    public function Index(){
    
        $data = Categories::All();
        $products = Products::All();
        return view('products.index', ['categories'=>$data, 'products'=>$products]);
    }

    public function Create(Request $request){

        $validate=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string|max:255',
            'description'=>'required',
            'stocke'=>'required',
            'categories_id'=>'required',
            'image'=>'nullable'

           ]);
            $arr = [
             'name'=>$request->name,
             'description'=>$request->description,
              'price'=>$request->price,
              'stocke'=>$request->stocke,
              'categories_id'=>$request->categories_id,
              'image'=>$request->image
            ];
        $items = Products::Create($arr);
        $items->save();
        return redirect()->route('products.index');
    }

    public function DeleteProduct($id){
        	$record = Products::find($id);

            if($record){
                $record->delete();
            }

            return redirect()->route('products.index');
    }

    public function edit($id){
        $data = Products::find($id);
        $cdata =Categories::All();
       return view('products.edit',['item'=>$data], ['categories'=>$cdata]);
   }
   public function Update(Request $request){
        //  dd($request);
        $record = Products::find($request->id);
        if($record){
            $record->Update([
                'name'=>$request->name,
                'description'=>$request->description,
                'price'=>$request->price,
                'stocke'=>$request->stocke,
                'categories_id'=>$request->cat_id,
                'image'=>$request->image
            ]);
        }
        return redirect()->route('products.index');

   }
    
}

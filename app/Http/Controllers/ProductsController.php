<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{
    public function Index(){
    
        $data = DB::table('categories')->get();
        // $products = Products::with('categoy')->get(); //eloquent (method 1)
        $products = DB::table('products')
        ->select('categories.name as categories_name','products.id','products.name as name','products.description','products.price','products.stocke','products.categories_id','products.image')
        ->join('categories','products.categories_id','=','categories.id')
        ->get();
        // dd($products);
        return view('products.index', ['categories'=>$data, 'products'=>$products]);
    }

    public function Create(Request $request){

        $validate=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'nullable|string|max:255',
            'price'=>'required',
            'stocke'=>'required',
            'categories_id'=>'required',
            'image'=>'required|image|mimes:png,jpeg,jpg,pdf,gif,webp'

           ]);
           // User path
            $image = $request->file('image');

            // to store the picture    storage/app/public/images
            $path = $image->store('images', 'public');

            $arr = [
             'name'=>$request->name,
             'description'=>$request->description,
              'price'=>$request->price,
              'stocke'=>$request->stocke,
              'categories_id'=>$request->categories_id,
              'image'=>Storage::Url($path),
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

    $validate=$request->validate([
        'image'=>'required|image|mimes:png,jpeg,jpg,pdf,gif,webp',
       ]);

        $record = Products::find($request->id);

            // User path
            $image = $request->file('image');

            // to store the picture    storage/app/public/images
            $path = $image->store('images', 'public');
        if($record){
            $record->Update([
                'name'=>$request->name,
                'description'=>$request->description,
                'price'=>$request->price,
                'stocke'=>$request->stocke,
                'categories_id'=>$request->cat_id,
                'image'=>Storage::Url($path),
            ]);
        }
        return redirect()->route('products.index');

   }
    
}

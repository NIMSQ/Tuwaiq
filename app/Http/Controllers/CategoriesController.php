<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
class CategoriesController extends Controller
{
    //
    public function Index(){
        $getData = categories::All();
        return view('categories.index',['data'=>$getData]);

    }

    public function Create(Request $request){

        $validate=$request->validate([
            'categ_name'=>'required|string|max:255',
            'categ_des'=>'nullable|string|max:255'
           ]);
        //on the left side must be the same fiels name in DB.
        $arr = [
            'name'=>$request->categ_name,
            'description'=>$request->categ_des
        ];
        $items = categories::Create($arr);
        $items->save();
        return redirect()->route('categories.index');


    }

    public function Delete($id){
        $data = categories::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('categories.index');
    }

    public function edit($id){
         $data = categories::find($id);
        return view('categories.edit',['item'=>$data]);
    }

    public function Update(Request $request){
        // dd($request);
        $data = categories::find($request->id);

        if($data){
        $data->update([
            'name'=>$request->categ_name,
            'description'=>$request->categ_des
        ]);
        
    }
        return redirect()->route('categories.index');
     }
    
}

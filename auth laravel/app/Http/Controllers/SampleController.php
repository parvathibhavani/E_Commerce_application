<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function additem(){
        return view('add-item');
    }
    public function saveitem(Request $request){
        DB::table('items')->insert([
            'name'=> $request->name,
            'category'=>$request->category,
            'price'=>$request->price,
            'quantity'=>$request->quantity

        ]);
        return back()->with('item_add','item added sucessfully');
    }
    public function itemlist(){
        $items=DB::table('items')->get();
        return view('item-list',compact('items'));
    }
    public function editlist($id){
        $items =DB::table('items')->where('id',$id)->first();
        return view('edit-item',compact('items'));
    }
    public function updateitem(Request $request){
        DB::table('items')->where('id',$request->id)->update([
            'name'=> $request->name,
            'category'=>$request->category,
            'price'=>$request->price,
            'quantity'=>$request->quantity
        ]);
        return back()->with('item_update',"item updated sucessfully");
    }
    public function deleteitem($id){
        DB::table("items")->where('id',$id)->delete();;
        return back()->with('item_delete',"item deleted sucessfully");
    }

}

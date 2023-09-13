<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function insert(Request $request){
        $product = new Product() ;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->typeproduct_id = $request->typeproduct_id;
        if($request->hasFile('image')){
            $filename = Str::random(15). '.' .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path(). '/Template/product/image/',$filename);
            Image::make(public_path(). '/Template/product/image/'.$filename);
            $product->image = $filename;
        }else{
            $product->image ='nopic.jpg';
        }
        $product->save();
        toast('บันทึกข้อมูลสำเร็จ','success');
        return redirect()->route('p.index');
    }
    public function delete($product_id){
        $product =Product::find($product_id);
        if($product->image != 'nopic.jpg'){
            File::delete(public_path().'/Template/product/image/'.$product->image);
        }
        $product->delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('p.index');
    }
    public function edit($product_id){
        $product = Product::find($product_id);
        return view('admin.product.edit',compact('product'));
    }

}

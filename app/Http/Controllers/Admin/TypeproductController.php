<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typeproduct;

class TypeproductController extends Controller
{
    public function index(){
        $typeproduct = Typeproduct::all();
        return view('admin.typeproduct.index',compact('typeproduct'));
    }

    public function create(){
        return view('admin.typeproduct.create');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required|unique:typeproducts|max:255',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]
    );
        $type = new Typeproduct;
        $type->name = $request->name;
        $type->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','');
        return redirect()->route('t.index');

    }

    public function edit($typeproduct_id){
        $type = Typeproduct::find($typeproduct_id);
        return view('admin.typeproduct.edit',compact('type'));

    }

    public function update(Request $request, $typeproduct_id ){
        $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อประเภทสินค้า',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]
    );
        $type = Typeproduct::find($typeproduct_id);
        $type->name = $request->name;
        $type->save();
        alert()->success('แก้ไขข้อมูลสำเร็จ','');
        return redirect()->route('t.index');
    }

    public function delete( $typeproduct_id){
        $type = Typeproduct::find($typeproduct_id);
        $type->delete();
        alert()->success('ลบข้อมูลสำเร็จ','');
        return redirect()->route('t.index');
    }
}

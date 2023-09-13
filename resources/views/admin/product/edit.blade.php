@extends('layouts.masterbackend')
@section('content')
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">แก้ไขสินค้า</h4>

                <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ url('admin/product/insert')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">ชื่อสินค้า</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $product->name}}">
                    </div>
                    <div class="form-group">
                        <label for="price">ราคาสินค้า</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{ $product->price}}">
                    </div>

                    <div class="form-group">
                      <label for="price">ประเภทสินค้า</label>
                    <select class="form-select form-control"  name="typeproduct_id" aria-label="Default select example" >
                        <option selected>ขนาดสิ้นค้า</option>
                        <option value="1">ขนาดเล็ก</option>
                        <option value="2">ขนาดกลาง</option>
                        <option value="3">ขนาดใหญ่</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="image">รูปสินค้า</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <div class="mt-3">
                        <img src=" {{asset('Template/product/image/'.$product->image)}}" width="150px" alt="">
                    </div>
                    <div class="mt-4">
                    <button type="submit" class="btn btn-primary mr-2">บันทึกข้อมูล</button>
                    <a href="{{ route('p.index') }}" class="btn btn-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.masterbackend')
@section('content')
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">เพิ่มข้อมูลสินค้า</h4>

                <form class="forms-sample">
                    <div class="form-group">
                        <label for="name">ชื่อสินค้า</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="price">ราคาสินค้า</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>

                    <div class="form-group">
                      <label for="price">ประเภทสินค้า</label>
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>กรุณาเลือกประเภทสินค้า</option>
                        <option value="1">สี</option>
                        <option value="2">ขนาด</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="image">รูปสินค้า</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">บันทึกข้อมูล</button>
                    <a href="{{ route('p.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

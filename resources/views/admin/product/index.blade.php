@extends('layouts.masterbackend')
@section('content')
<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">สินค้า</h4>
                  <div class="mt-4">
                    <a href="{{url('admin/product/create')}}" class="btn btn-success">+ เพิ่มข้อมูลสินค้า</a>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ลำดับ</th>
                          <th>ชื่อสินค้า</th>
                          <th>รูป</th>
                          <th>ราคา</th>
                          <th>ประเภท</th>
                          <th>การจัดการ</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $product as $pro)

                        <tr>
                          <td>{{ $pro->product_id}}</td>
                          <td>{{ $pro->name}}</td>
                          <td>
                            <img src=" {{asset('Template/product/image/'.$pro->image)}}" width="250px" alt="">
                          </td>
                          <td>{{ $pro->price}}</td>
                          <td>{{ $pro->typeproduct_id}}</td>
                          <td> 
                            
                            <a href="{{ url('admin/product/edit/'.$pro->product_id) }}" class="btn btn-warning">แก้ไข</a>
                            <a href="{{ url('admin/product/delete/'.$pro->product_id) }}" class="btn btn-danger">ลบ</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection
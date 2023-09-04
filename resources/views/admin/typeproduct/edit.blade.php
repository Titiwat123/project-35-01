@extends('layouts.masterbackend')
@section('content')
    <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">แก้ไขข้อมูลประเภทสินค้า</h4>

                <form class="forms-sample" method="POST"
                    action="{{ url('admin/typeproduct/update/' . $type->typeproduct_id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">ชื่อประเภทสินค้า</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $type->name }}">
                    </div>
                    <div class="mt-4">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">บันทึกข้อมูล</button>
                    <a href="{{ route('t.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

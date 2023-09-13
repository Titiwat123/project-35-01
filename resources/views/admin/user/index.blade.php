@extends('layouts.masterbackend')
@section('content')
<div class="col-lg-10   grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ผู้ใช้งาน</h4>
                  <p class="card-description">
                    เพิ่ม <code>ตาราง</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>ชื่อ</th>
                          <th>อีเมล</th>
                          <th>วันที่สมัคร</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($user as $u)
                        <tr>
                          <td>{{ $u->id}}</td>
                          <td>{{ $u->name}}</td>
                          <td>{{ $u->email}}</td>
                          <td>{{ $u->created_at}}</td>
                         
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection
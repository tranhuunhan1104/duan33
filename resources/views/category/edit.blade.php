@extends('layout.master')
@section('content')
<form method="POST" action="{{route('category.update',[$categories->id])}}" enctype= "multipart/form-data" >
    @method('PUT')
    @csrf
         <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bảng chỉnh sửa</h4>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Tên thể loại</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" id="fname" name="name" value="{{$categories->name}}"  ></td>
                        </tr>
                        <tr><input class="btn btn-info" type="submit" value="Xác nhận"></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection

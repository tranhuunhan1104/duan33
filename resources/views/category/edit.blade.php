@extends('layout.master')
@section('content')
    <form method="POST" action="{{ route('category.update', [$categories->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="card-body">
                <h2 class="offset-4">
                    Chỉnh Sửa Danh Mục Sản Phẩm</h2>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3">

                            <div class="col-12">
                                <h2 class="form-label">Tên danh mục</h2>
                                <input type="text" class="form-control" value="{{ $categories->name }}" name="name">
                                <tr><input class="btn btn-info" type="submit" value="Xác nhận"></tr>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

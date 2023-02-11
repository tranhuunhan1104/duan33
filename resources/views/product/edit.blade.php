@extends('layout.master')
@section('content')
    <h2 class="offset-4">
        Chỉnh sửa sản phẩm
    </h2>

    <form method="POST" action="{{ route('product.update', [$product->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <form class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Tên</label>
                            <input type="text" class="form-control" value="{{ $product->name }}" name="name">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Trạng thái</label>
                            <br>
                            <select name="status" id="">
                                <option value="02">Sản phẩm hot</option>
                                <option value="01">Sản phẩm tầm trung</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Số lượng</label>
                            <input type="text" class="form-control" value="{{ $product->quantity }}" name="quantity">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Mô tả</label>
                            <textarea class="form-control" name="description" rows="4" cols="4">{{ $product->description }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Hình ảnh</label>
                            <input class="form-control" name="image" value="{{ $product->image }}" type="file">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Giá (vnd)</label>
                            <input type="text" class="form-control" value="{{ $product->price }}" name="price">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="control-label" for="flatpickr01">Thể loại<abbr
                                    name="trường bắt buộc"></abbr></label>
                            <select name="category_id" id="" class="form-control">
                                <option value="">--Vui lòng chọn--</option>
                                @foreach ($categories as $category)
                                    <option <?= $category->id == $product->category_id ? 'selected' : '' ?>
                                        value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            <input class="btn btn-info" type="submit" value="Xác nhận">
                        </div>
                </div>
            </div>
        </div>
        <!--end row-->

    </form>
@endsection

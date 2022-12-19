@extends('layout.master')
@section('content')
<form action="{{route('product.store')}}" method = 'post' enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Thêm sản phẩm mới</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">

               <div class="col-12">
                 <label class="form-label">Tên</label>
                 <input type="text" class="form-control" name="name" placeholder="Tên...... ">
                 @error('name')
                <div style="color: red">{{$message}}</div>
                @enderror
               </div>


               <div class="col-12">
                 <label class="form-label">Trạng thái</label>
                 <br>
                 <select name="status" id="">
                    <option value="02">Sản phẩm hot</option>
                    <option value="01">Sản phẩm tầm trung</option>
                 </select>
                 {{-- <input type="text" class="form-control" name="status" placeholder="Status......."> --}}
                 @error('status')
                 <div style="color: red">{{$message}}</div>
                 @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Mô tả</label>
                 <textarea class="form-control" placeholder="Mô tả......." name="description" rows="4" cols="4"></textarea>
                 @error('description')
                 <div style="color: red">{{$message}}</div>
                 @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Số lượng</label>
                 <input class="form-control" name="quantity" type="number">
               </div>
               <div class="col-12">
                 <label class="form-label">Hình ảnh</label>
                 <input class="form-control" name="image" type="file">
               </div>
               <div class="col-12">
                 <label class="form-label">Giá (vnd)</label>
                 <input type="text" class="form-control" name="price" placeholder="Giá........">
               </div>

               <div class="col-12 col-md-6">
                <label class="control-label" for="flatpickr01">Thể loại<abbr
                    name="category_id"></abbr></label>
                    @error('description')
                    <div style="color: red">{{$message}}</div>
                    @enderror
            <select name="category_id" id="" class="form-control">
                <option value="">--Vui lòng chọn--</option>
                @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

            <input type="submit" value="Xác Nhận">

             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->

</form>

@endsection








@extends('layout.master')
@section('content')

<h2> Form Chỉnh sửa</h2>

<form method="POST" action="{{route('product.update',[$product->id])}}" enctype= "multipart/form-data" >
    @method('PUT')
    @csrf

    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Edit Product</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">
                <div class="col-12">
                    <label class="form-label">Tên</label>
                    <input type="text" class="form-control" value="{{$product->name}}" name="name">
                  </div>
               <div class="col-12">
                 <label class="form-label">Status</label>
                 <br>
                 <select name="status" id="">
                    <option value="02">Sản phẩm hot</option>
                    <option value="01">Sản phẩm tầm trung</option>
                 </select>
               </div>
               <div class="col-12">
                <label class="form-label">Quantity</label>
                <input type="text" class="form-control" value="{{$product->quantity}}" name="quantity">
              </div>
               <div class="col-12">
                 <label class="form-label">Full description</label>
                 <textarea class="form-control" name="description" rows="4" cols="4">{{$product->description}}</textarea>
               </div>
               <div class="col-12">
                <label class="form-label">Images</label>
                <input class="form-control" name="image" value="{{$product->image  }}" type="file">
              </div>
               <div class="col-12">
                 <label class="form-label">Price ($)</label>
                 <input type="text" class="form-control" value="{{$product->price}}" name="price" >
               </div>
               <div class="col-12 col-md-6">
                <label class="control-label" for="flatpickr01">Category<abbr
                    name="trường bắt buộc"></abbr></label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">--Vui lòng chọn--</option>
                        @foreach ($categories as $category)
                        <option
                            <?= $category->id == $product->category_id ? 'selected' : '' ?>
                            value="{{ $category->id }}">
                            {{ $category->name }}</option>
                    @endforeach
                    </select>


            <input type="submit" value="Submit">

             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->

</form>

@endsection

@extends('layout.master')
@section('content')
<form action="{{route('product.store')}}" method = 'post' enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
         <div class="card">
           <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Add New Product</h5>
             </div>
           <div class="card-body">
             <div class="border p-3 rounded">
             <form class="row g-3">

               <div class="col-12">
                 <label class="form-label">Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Name...... ">
                 @error('name')
                <div style="color: red">{{$message}}</div>
                @enderror
               </div>


               <div class="col-12">
                 <label class="form-label">Status</label>
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
                 <label class="form-label">Full description</label>
                 <textarea class="form-control" placeholder="Full description......." name="description" rows="4" cols="4"></textarea>
                 @error('description')
                 <div style="color: red">{{$message}}</div>
                 @enderror
               </div>

               <div class="col-12">
                 <label class="form-label">Quantity</label>
                 <input class="form-control" name="quantity" type="number">
               </div>
               <div class="col-12">
                 <label class="form-label">Images</label>
                 <input class="form-control" name="image" type="file">
               </div>
               <div class="col-12">
                 <label class="form-label">Price ($)</label>
                 <input type="text" class="form-control" name="price" placeholder="Price........">
               </div>

               <div class="col-12 col-md-6">
                <label class="control-label" for="flatpickr01">Category<abbr
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

            <input type="submit" value="Submit">

             </div>
            </div>
           </div>
        </div>
     </div><!--end row-->

</form>

@endsection








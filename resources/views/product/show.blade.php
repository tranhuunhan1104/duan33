@extends('layout.master')
@section('content')
<style>
    img#imgprd {
      border: 3px solid rgb(17, 16, 16);
          padding: 10px;
          height: 310px;
          width: 310px;
    }
</style>

<body>
<section class="section profile">

  <div class="row">
  <div class="col-xl-12">
  <div class="col-xl-3">
  <br>
  </div>
  </div>
    <div class="col-xl-4">
  <div class="card">
          <h1><img id="imgprd" src="{{ asset('public/uploads/product/' . $productshow->image) }}"></h1>
          <h2 style=" text-align: center; color: rgb(84, 6, 36);" >{{ $productshow->name }}</h2>
          {{-- <h3 style="float: right;">  {{ number_format($productshow->price).'VND' }}</h3> --}}
    </div>
    <br>
    </div>
    <div class="col-xl-8">
      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Thông tin sản phẩm</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Mô tả</button>
            </li>
          </ul>
          <div class="tab-content pt-2">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
               <div class="row">
                <div class="col-lg-3 col-md-4 label ">Mã sản phẩm</div>
                <div class="col-lg-9 col-md-8">{{ $productshow->id }}</div>
              </div><br>
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Tên sản phẩm</div>
                <div class="col-lg-9 col-md-8">{{ $productshow->name }}</div>
              </div><br>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Giá</div>
                <div class="col-lg-9 col-md-8">{{ number_format($productshow->price).'VND' }}</div>
              </div><br>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Số lượng</div>
                <div class="col-lg-9 col-md-8">{{ $productshow->quantity }} chiếc</div>
              </div><br>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Loại sản phẩm</div>
                <div class="col-lg-9 col-md-8">{{ $productshow->category->name }}</div>
              </div><br>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Ngày tạo</div>
                <div class="col-lg-9 col-md-8">{{ $productshow->created_at }}</div>
              </div>
            </div><br>
             <div class="tab-pane fade pt-3" id="profile-settings">
              <!-- Change mota Form -->
                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mô tả</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="col-lg-9 col-md-8">{!! $productshow->description !!}</div>
                  </div>
                </div>
            </div>
          </div><!-- End Bordered Tabs -->
                    {{-- <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay Lại</a> --}}
        </div>
      </div>
    </div>
  </div>
  <a href="{{ route('product.index') }}" class="btn btn-info">Quay Lại</a>
</section>
</body>

@endsection

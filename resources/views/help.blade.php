@extends('layout.master')
@section('content')
<div class="tab-content" id="myTabContent">
    @foreach($product as  $value)


    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
        <div class="row product-grid-4">
            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="shop-product-right.html">
                                <img class="default-img" src="{{ 'public\uploads\product'. $value->image  }}" alt="" />
                                <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                            <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Hot</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <div class="product-category">
                            <a href="shop-grid-right.html">{{ $value->name }}</a>
                        </div>
                        <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoe</a></h2>
                        <div class="product-rate-cover">
                            <div class="product-rate d-inline-block">
                                <div class="product-rating" style="width: 90%"></div>
                            </div>
                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                        </div>
                        <div>
                            <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                        </div>
                        <div class="product-card-bottom">
                            <div class="product-price">
                                <span>{{number_format($value->price) }} $</span>
                            </div>
                            <div class="add-cart">
                                <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
@endsection
{{ asset('public/uploads/product/'.$value->image) }}




<div class="header-action-icon-2">
    <a >
        <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg" />
    </a>

    @if (isset(Auth()->guard('customers')->user()->name))
    <a ><span class="lable ml-0">{{ Auth()->guard('customers')->user()->name }}</span></a>
    @else
    <p>Vui long dang nhap</p>
    @endif
    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
        <ul>
            @if (isset(Auth()->guard('customers')->user()->name))
            <li><a href="{{ route('login.index') }}"><i class="fi fi-rs-sign-in mr-10"></i>Đăng xuất</a></li>
            @endif
        </ul>
    </div>
</div>























<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
        <div class="row product-grid-4">
            @foreach ($product as $item)
            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a >
                                <img class="default-img" src="{{ asset('public/uploads/product/'.$item->image) }}" alt="" />
                            </a>
                        </div>
                        <div class="product-action-1">
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Hot</span>
                        </div>
                    </div>
                    <div class="product-content-wrap">
                        <div class="product-category">
                            <a>{{ $item->category->name }}</a>
                        </div>
                        <h2><a>{{ $item->name }}</a></h2>
                        <div class="product-rate-cover">
                            <div class="product-rate d-inline-block">
                                <div class="product-rating" style="width: 90%"></div>
                            </div>
                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                        </div>
                        <div class="product-card-bottom">
                            <div class="product-price">
                                {{number_format($item->price) }} $
                                {{-- <span class="old-price">$32.8</span> --}}
                            </div>
                            <div class="add-cart">
                                <a class="add" href="{{ route('cart.index') }}"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            <!--end product card-->
        </div>

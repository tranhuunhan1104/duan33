@extends('layout.mastershop')
@section('content')


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

@endsection

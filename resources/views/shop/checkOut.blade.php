@extends('shop.masterShop')
@section('content')
<table>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">





                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                <form class="checkout-form" method="POST" action="{{ route('order') }}" >
                                @csrf
                                @if (isset(Auth()->guard('customers')->user()->name))
                <div class="bg-light p-30">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input name="name" class="form-control" type="text" placeholder="John"
                            value="{{ Auth()->guard('customers')->user()->name }}" id="full_name"
                            placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input name="email" class="form-control" type="text" placeholder="example@email.com"
                            value="{{ Auth()->guard('customers')->user()->email }}" id="user_city">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input name="phone" class="form-control" type="text" placeholder="+123 456 789"
                            value="{{ Auth()->guard('customers')->user()->phone }}" id="user_post_code">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address </label>
                            <input  name="address" class="form-control" type="text" placeholder="123 Street"
                            value="{{ Auth()->guard('customers')->user()->address }}" id="user_address"
                                            placeholder="">
                        </div>
                        @else
                            <h4>Vui lòng đăng nhập trước khi thanh toán nhé</h4>
                            <a href="{{ route('login.index') }}" class="btn btn-main">Đăng Nhập</a>
                            @endif
                        @php $totalAll = 0 @endphp

            <div class="block">

                <h4 class="widget-title">Tóm Tắt</h4>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            @php
                                $total = $details['price'] * $details['quantity'];
                                $totalAll += $total

                            @endphp
                            <div>
                        <h6 class="mb-3">Products</h6>
                        <div class="d-flex justify-content-between">
                            <p> <input type="hidden" value="{{ $id }}"
                                name="product_id[]">{{ $details['nameVi'] ?? '' }} x
                                <input type="hidden" value="{{ $details['quantity'] }}"
                                name="quantity[]">{{ $details['quantity'] ?? '' }}</p>
                                <input type="hidden" value="{{ $total }}"
                                    name="total[]"></td>

                        </div>
                    </div>

                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>{{ $total }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>{{ $total }}</h5>
                        </div>
                    </div>


                </div>
                <div class="discount-code">
                    @endforeach
                @endif
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>TotalAll</h5>
                        <h5>{{ $totalAll }}</h5>
                    </div>
                </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Đặt hàng</button>

        </form>

            </div>

        </div>
        </div>


</table>
@endsection

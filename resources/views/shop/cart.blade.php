@extends('shop.masterShop')
@section('content')
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        {{-- <th>Image</th> --}}
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @php
                    $total = 0;
                    $totalAll = 0;
                @endphp
                 @if (session('cart'))
                 @foreach (session('cart') as $id => $details)
                 @php
                     $total = $details['price'] * $details['quantity'];
                     $totalAll += $total;


                 @endphp
                    <tr>
                        <td class="align-middle">
                            <img src="{{ asset('public/uploads/product/'.$details['image']) }}" alt="" style="width: 50px;"><a>{{ $details['nameVi'] ?? '' }}</a></td>
                        <td class="align-middle">$ {{ number_format($details['price']) }}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" >
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value=" {{ $details['quantity'] }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">$ {{ number_format($total) }}</td>
                        <td class="align-middle">
                            <button class="btn btn-sm btn-danger" ><a data-href="{{ route('remove.from.cart', $id) }}"
                                class="btn btn-danger btn-sm fa fa-window-close"
                                id="{{ $id }}">Xóa</a></button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @endif
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        {{-- <h6>$ {{ $totalAll}}</h6> --}}
                        <h6>$ {{ number_format($totalAll) }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$ 10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5> $ {{ number_format($totalAll + 10)  }}</h5>
                        @if (session('cart'))
                        <a href="{{ route('checkOuts') }}" class="btn btn-danger pull-right">Checkout</a>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '.fa-window-close', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let href = $(this).data('href');
            let csrf = '{{ csrf_token() }}';
            window.location.reload();
            $.ajax({
                url: href,
                method: 'delete',
                data: {
                    _token: csrf
                },
                success: function(response) {
                    $('.item-' + id).remove();
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                }
            });
        });

    $('.btn-plus, .btn-minus').on('click', function(e) {
        const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
        const input = $(e.target).closest('.input-group').find('input');
        if (input.is('input')) {
            input[0][isNegative ? 'stepDown' : 'stepUp']()
        }
    })
</script>



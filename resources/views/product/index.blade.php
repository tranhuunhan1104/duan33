@extends('layout.master')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        @include('sweetalert::alert')
        <div class="card">
            <div class="card-body">
                <h3 class="offset-4">
                    Sản Phẩm</h3>
                <form class="navbar-form navbar-left" action="{{ route('product.search') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <input type="text" name="search_product" class="form-control"
                                    placeholder="Nhập tên sản phẩm cần tìm ...">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-warning">Tìm kiếm</button>
                        </div>
                    </div>
                </form>


                @if (Auth::user()->hasPermission('Product_create'))
                    <a class="btn btn-warning" href="{{ route('product.create') }}">Thêm</a>
                @endif

                <div class="table-responsive pt-3">
                    <table class="table table-info" border="1">
                        <thead>
                            <tr>
                                <td scope="col">#</td>
                                <td scope="col">Tên sản phẩm</td>
                                <td scope="col">Giá (vnd)</td>
                                <td scope="col">Mô tả</td>
                                <td scope="col">Số lượng</td>
                                <td scope="col">Ảnh</td>
                                <td scope="col">Trạng thái</td>
                                <td scope="col">Thể loại </td>
                                <td scope="col">Tùy chọn </td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $team)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ number_format($team->price) }}</td>
                                    <td>{{ $team->description }}</td>
                                    <td>{{ $team->quantity }}</td>
                                    <td>
                                        <img style="width:200px ; height: 165px ; border-radius:0%"
                                            src="{{ asset('public/uploads/product/' . $team->image) }}" alt="">
                                    </td>
                                    <td>{{ $team->status }}</td>
                                    {{-- <td>{{$team->category_id }}</td> --}}
                                    <td>{{ $team->category->name }}</td>
                                    <td>
                                        <form action="{{ route('product.softdeletes', $team->id) }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <button
                                                onclick="return confirm('Bạn có muốn chuyển danh mục này vào thùng rác không ?');"
                                                class="btn btn-success">Xóa</button>
                                        </form>
                                        <a href="{{ route('product.edit', [$team->id]) }}" class="btn btn-primary">Sửa</a>
                                    </td>
                                    </form>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $products->appends(request()->query()) }}
                @endsection

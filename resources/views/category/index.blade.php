@extends('layout.master')
@section('content')
    <div class="card">
      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
           {{ session('status') }}
        </div>
        @endif
        <h4 class="card-title">
            Danh Mục</h4>

        <form class="navbar-form navbar-left"  action="{{ route('category.search') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-info">Tìm kiếm</button>
                </div>
            </div>
        </form>
        @if(Auth::user()->hasPermission('Category_create'))
          <a class="btn btn-warning" href="{{route('category.create')}}">Thêm</a>
        @endif
        <div class="table-responsive pt-3">
          <table class="table table-info">
            <thead>
              <tr>
                <th>
                    #
                </th>
                <th>
                    Tên danh mục
                </th>

                <th>
                   Tùy chọn
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $team)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$team->name}}</td>

                    <form action="{{ route('category.softdeletes', $team->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    <td>

                            <button type="submit" class="btn btn-success"
                            onclick="return confirm('Chuyên vào thùng rác')">Xóa</button>

                        <a href="{{route('category_edit',[$team->id])}}" class="btn btn-primary">Sửa</a>
                    </td>
                    </form>
                  </tr>
        @endforeach

            </tbody>
        </table>
        <tr>{{ $categories->appends(request()->query()) }}</tr>
        </div>
      </div>
    </div>
  </div>

  @endsection

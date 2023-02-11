@extends('layout.master')
@section('content')
    <!DOCTYPE html>
    <html>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <body>

        <h2 class="offset-4">Thùng rác chung</h2>

        <table style="width:50%">
            <a href="{{ route('category.trash') }}" class="btn btn-info" class="offset-4">Danh mục sản phẩm </a>
            <a href="{{ route('product.trash') }}" class="btn btn-warning" class="offset-4">Sản phẩm </a>
        </table>

    </body>

    </html>
@endsection

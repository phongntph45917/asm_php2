@extends('layouts.master')

@section('title')
    Quản lý Sản phẩm
@endsection

@section('content')
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    @if (isset($_SESSION['status']) && !$_SESSION['status'])
        <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMG THUMBNAIL</th>
                <th>NAME</th>
                <th>Category Name</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>
                        <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">
                    </td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['c_name'] }}</td>
                    <td>{{ $product['created_at'] }}</td>
                    <td>{{ $product['updated_at'] }}</td>
                    <td>
                        <a href="{{ url(" /products/{$product['id']}") }}" class="btn btn-info">Xem</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>
                    <!-- Your existing post articles go here -->
                    <article class="card mb-4">
                        <!-- Existing post content -->
                    </article>
                    <!-- Additional post articles as needed -->

                    <ul class="pagination justify-content-center">
                        <li class="page-item active">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                </div>

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
                            <a href="{{ url(" admin/products/{$product['id']}/show") }}" class="btn btn-info">Xem</a>
                            <a href="{{ url(" admin/products/{$product['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url(" admin/products/{$product['id']}/delete") }}"
                                onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach

            </div>
        </div>
    </section>
@endsection

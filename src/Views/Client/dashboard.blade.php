@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Bài viết</h2>

<<<<<<< HEAD

=======
                    <!-- Table for displaying products -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><img src="{{ asset($product->img_thumbnail) }}" width="100px" alt=""></td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->c_name }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        <a href="{{ url("/products/{$product->id}") }}" class="btn btn-info">Xem</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
>>>>>>> 174ee75433100c1cc6e1e236a90e7a79909e7fbd

                    <!-- Pagination -->
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a href="#!" class="page-link">1</a></li>
                        <li class="page-item"><a href="#!" class="page-link">2</a></li>
                        <li class="page-item"><a href="#!" class="page-link">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

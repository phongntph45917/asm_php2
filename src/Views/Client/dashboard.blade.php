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
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <h2 class="h5 section-title">Product List</h2>
                    @include('products.index', ['products' => $products])
                </div>
            </div>
        </div>
    </section>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($_SESSION['error']))
                        <div class="alert alert-warning mt-3 mb-3">
                            {{ $_SESSION['error'] }}
                        </div>

                        @php
                            unset($_SESSION['error']);
                        @endphp
                    @endif

                    <form action="{{ url('handle-login') }}" method="POST">
                        @csrf <!-- Add this for CSRF protection -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

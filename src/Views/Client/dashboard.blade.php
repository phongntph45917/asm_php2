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
        </div>
    </section>
@endsection

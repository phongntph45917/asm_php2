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

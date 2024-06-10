@extends('layouts.master')
@section('title')
    <h1>Chi tiết danh mục</h1>
@endsection
@section('content')
    <p>ID: <?= $danhmuc['id'] ?></p>
    <p>Tên: <?= $danhmuc['name'] ?></p>
@endsection

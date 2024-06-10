@extends('layouts.master')
@section('title')
    <h1>Thêm mới danh mục</h1>
@endsection
@section('content')
    <form action="<?= url('admin/danhmucs/store') ?>" method="post">
        <label for="name">Tên:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Lưu</button>
    </form>
@endsection

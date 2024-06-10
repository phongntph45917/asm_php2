@extends('layouts.master')

@section('title')
    Quản lý Danh mục
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

    <a href="{{ url('admin/danhmucs/create') }}" class="btn btn-primary">Thêm mới</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($danhmucs as $danhmuc)
                <tr>
                    <td>{{ $danhmuc['id'] }}</td>
                    <td>{{ $danhmuc['name'] }}</td>
                    <td>
                        <a href="{{ url("admin/danhmucs/{$danhmuc['id']}/show") }}">Xem</a>
                        <a href="{{ url("admin/danhmucs/{$danhmuc['id']}/edit") }}">Sửa</a>
                        <a href="{{ url("admin/danhmucs/{$danhmuc['id']}/delete") }}">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

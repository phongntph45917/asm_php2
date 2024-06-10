@extends('layouts.master')

@section('content')
    <h1><?= htmlspecialchars($product['name']) ?></h1>
    <img src="<?= htmlspecialchars($product['img_thumbnail']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
    <p><?= htmlspecialchars($product['overview']) ?></p>
    <p><?= htmlspecialchars($product['content']) ?></p>
    <div class="product-time">
        Đăng lúc: <?= date('d-m-Y H:i:s', strtotime($product['created_at'])) ?>
    </div>
    <div class="product-category">
        Danh mục: <?= htmlspecialchars($product['c_name']) ?>
    </div>
    <a href="<?= url('/products') ?>">Quay lại danh sách sản phẩm</a>
@endsection

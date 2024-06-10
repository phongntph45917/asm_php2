<!-- @extends('layouts.master') -->
<h1>Danh sách sản phẩm</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li class="product">
            <img src="<?= $product['img_thumbnail'] ?>" alt="<?= $product['name'] ?>">
            <div class="product-info">
                <a href="/products/<?= $product['id'] ?>">
                    <?= $product['name'] ?>
                </a>
                <div class="product-time">
                    Đăng lúc: <?= date('d-m-Y H:i:s', strtotime($product['created_at'])) ?>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

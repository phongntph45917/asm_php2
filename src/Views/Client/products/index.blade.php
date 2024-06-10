<!-- resources/views/product_list.blade.php -->
<div class="recent-products">
    <h2 class="h5 section-title">Recent Products</h2>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="/products/{{ $product['id'] }}">{{ $product['name'] }}</a>
                <span class="product-time">Đăng lúc: {{ date('d-m-Y H:i:s', strtotime($product['created_at'])) }}</span>
            </li>
        @endforeach
    </ul>
</div>

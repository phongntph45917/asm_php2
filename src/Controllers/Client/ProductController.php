<?php

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;
use Asm\Php2\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        // Lấy tất cả sản phẩm
        $products = $this->product->all();

        // Hiển thị view danh sách sản phẩm
        $this->renderViewClient('products.index', [
            'products' => $products
        ]);
    }
    public function show($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewAdmin('products.show', [
            'product' => $product
        ]);
    }

    public function detail($id)
    {
        // Lấy chi tiết sản phẩm theo ID
        $product = $this->product->findByID($id);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            // Có thể chuyển hướng đến trang 404 hoặc trang lỗi
            return $this->renderViewClient('errors.404');
        }

        // Hiển thị view chi tiết sản phẩm
        $this->renderViewClient('products.detail', [
            'product' => $product
        ]);
    }
}

<?php

// Website có các trang là:
//      Trang chủ
//      Giới thiệu
//      Sản phẩm
//      Chi tiết sản phẩm
//      Liên hệ

// Để định nghĩa được, điều đầu tiên làm là phải tạo Controller trước
// Tiếp theo, khai function tương ứng để xử lý
// Bước cuối, định nghĩa đường dẫn

// HTTP Method: get, post, put (path), delete, option, head

use Asm\Php2\Controllers\Client\AboutController;
use Asm\Php2\Controllers\Client\ContactController;
use Asm\Php2\Controllers\Client\DashboardController;
use Asm\Php2\Controllers\Client\LoginController;
use Asm\Php2\Controllers\Client\ProductController;
use Asm\Php2\Controllers\Client\RegisterController;

$router->get('/', DashboardController::class . '@dashboard');
$router->get('/about', AboutController::class . '@index');

$router->get('/contact', ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');

$router->mount('/products', function () use ($router) {
    $router->get('/', ProductController::class . '@index');  // Danh sách
    $router->get('/{id}/show', ProductController::class . '@show');   // Xem chi tiết
});



$router->get('/login', LoginController::class . '@showFormLogin');
$router->post('/handle-login', LoginController::class . '@login');
$router->get('/logout', LoginController::class . '@logout');

$router->get('/register', RegisterController::class . '@showFormRegister');
$router->post('/handle-register', RegisterController::class . '@register');
// $router->get('/admin/users', RegisterController::class . '@index');
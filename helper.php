<?php

const PATH_ROOT = __DIR__ . '/';

if (!function_exists('asset')) {
    function asset($path)
    {
        return $_ENV['BASE_URL'] . $path;
    }
}

if (!function_exists('url')) {
    function url($uri = null)
    {
        return $_ENV['BASE_URL'] . $uri;
    }
}

if (!function_exists('auth_check')) { // check đã đăng nhập
    function auth_check()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . url('admin/'));
            exit;
        }
    }
}
if (!function_exists('is_admin')) { // check là admin
    function is_admin()
    {
        return auth_check() && $_SESSION['user']['type'] == 'admin';
    }
}
if (!function_exists('avoid_login')) { // bỏ qua trang login khi đã đăng nhập
    function avoid_login()
    {
        if (auth_check()) {
            if ($_SESSION['user']['type'] == 'admin') {
                header('Location: ' . url('admin/'));
                exit;
            }

            header('Location: ' . url());
            exit;
        }
    }
}

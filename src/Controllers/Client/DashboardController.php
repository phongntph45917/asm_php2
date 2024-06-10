<?php

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $name = 'dcm php2';
        $this->renderViewClient('dashboard', [
            'name' => $name,
        ]);
    }
}
<?php

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'PH459';

        $this->renderViewClient('client.dashboard', [
            'name' => $name
        ]);
    }
}
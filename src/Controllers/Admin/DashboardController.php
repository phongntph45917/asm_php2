<?php

namespace Asm\Php2\Controllers\Admin;

use Asm\Php2\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
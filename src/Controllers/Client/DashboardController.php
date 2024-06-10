<?php

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $this->renderViewClient(__FUNCTION__);
    }
}
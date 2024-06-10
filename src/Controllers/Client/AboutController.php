<?php 

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;

class AboutController extends Controller
{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}
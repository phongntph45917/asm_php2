<?php 

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;

class ContactController extends Controller
{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}
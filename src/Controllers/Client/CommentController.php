<?php

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;
use Asm\Php2\Commons\Helper;
use Asm\Php2\Models\Comment;

class DashboardController extends Controller
{
    private Comment $comment;
    public function __construct()
    {
        $this->comment = new Comment();
    }
    public function index(){

        $comments = $this->comment->all();
        Helper::debug($comments);
        $this->renderViewClient('comment', [
            'comment' => $comments
        ]);
    }
}
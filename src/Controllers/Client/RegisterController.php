<?php

namespace Asm\Php2\Controllers\Client;

use Asm\Php2\Commons\Controller;
use Asm\Php2\Commons\Helper;
use Asm\Php2\Models\User;
use Rakit\Validation\Validator;

class RegisterController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function showFormRegister()
    {
        $this->renderViewClient('register');
    }
    public function register()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',

        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('register'));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            $this->user->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url(''));
            exit;
        }
    }
}
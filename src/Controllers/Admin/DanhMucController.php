<?php
namespace Asm\Php2\Controllers\Admin;

use Asm\Php2\Commons\Controller;
use Asm\Php2\Models\Category;
use Rakit\Validation\Validator;

class DanhmucController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->all();

        $this->renderViewAdmin('danhmucs.index', [
            'danhmucs' => $categories,
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('danhmucs.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:100',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url('admin/danhmucs/create'));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];

            $this->category->insert($data); // Corrected method call

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/danhmucs'));
            exit;
        }
    }

    public function show($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('danhmucs.show', [
            'category' => $category // Updated variable name
        ]);
    }

    public function edit($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('danhmucs.edit', [
            'category' => $category // Updated variable name
        ]);
    }

    public function update($id)
    {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name' => 'required|max:100',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();
            header('Location: ' . url("admin/danhmucs/{$id}/edit"));
            exit;
        } else {
            $data = [
                'name' => $_POST['name'],
            ];

            $this->category->update($id, $data); // Corrected method call

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/danhmucs'));
            exit;
        }
    }

    public function delete($id)
    {
        $this->category->delete($id); // Corrected method call

        $_SESSION['status'] = true;
        $_SESSION['msg'] = 'Xóa thành công';

        header('Location: ' . url('admin/danhmucs'));
        exit();
    }
}

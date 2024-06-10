<h1>Chỉnh sửa danh mục</h1>
<form action="<?= url("admin/danhmucs/{$danhmuc['id']}/update") ?>" method="post">
    <label for="name">Tên:</label>
    <input type="text" name="name" id="name" value="<?= $danhmuc['name'] ?>">
    <button type="submit">Lưu</button>
</form>

<div class="container mt-5">
    <h1>Quản lý Tin tức</h1>
    <a href="index.php?controller=admin&action=addNews" class="btn btn-primary mb-3">Thêm Tin tức mới</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Hình ảnh</th>
                <th>Ngày tạo</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $item): ?>
                <tr>
                    <td><?= $item['title'] ?></td>
                    <td><img src="<?= $item['image'] ?>" width="100" alt="Image"></td>
                    <td><?= $item['created_at'] ?></td>
                    <td><?= $item['category_name'] ?></td>
                    <td>
                        <a href="index.php?controller=admin&action=editNews&id=<?= $item['id'] ?>" class="btn btn-secondary">Sửa</a>
                        <a href="index.php?controller=admin&action=deleteNews&id=<?= $item['id'] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

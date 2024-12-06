<div class="container mt-5">
    <h1>Quản lý tin tức</h1>
    <a href="index.php?controller=admin&action=addNews" class="btn btn-primary">Thêm tin tức</a>
    <div class="row">
        <?php foreach ($news as $item): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <a href="index.php?controller=admin&action=editNews&id=<?= $item['id'] ?>" class="btn btn-secondary">Sửa</a>
                        <a href="index.php?controller=admin&action=deleteNews&id=<?= $item['id'] ?>" class="btn btn-danger">Xóa</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

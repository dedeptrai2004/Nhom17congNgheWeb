<div class="container mt-5">
    <h1>Danh sách tin tức</h1>
    <div class="row">
        <?php foreach ($news as $item): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <a href="index.php?controller=news&action=detail&id=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

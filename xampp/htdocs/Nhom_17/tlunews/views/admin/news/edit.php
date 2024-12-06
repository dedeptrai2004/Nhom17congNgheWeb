<form action="index.php?controller=admin&action=editNews&id=<?= $news['id'] ?>" method="post">
    <h2>Sửa tin tức</h2>
    <input type="text" name="title" value="<?= $news['title'] ?>" required>
    <textarea name="content" required><?= $news['content'] ?></textarea>
    <input type="text" name="image" value="<?= $news['image'] ?>" required>
    <button type="submit">Cập nhật tin tức</button>
</form>

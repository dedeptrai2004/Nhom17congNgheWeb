<form action="index.php?controller=admin&action=addNews" method="post">
    <h2>Thêm tin tức mới</h2>
    <input type="text" name="title" placeholder="Tiêu đề" required>
    <textarea name="content" placeholder="Nội dung" required></textarea>
    <input type="text" name="image" placeholder="URL hình ảnh" required>
    <button type="submit">Thêm tin tức</button>
</form>

<?php
class AdminController {
    public function dashboard() {
        $news = News::getAll();
        include "views/admin/news/index.php";
    }

    public function addNews() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Xử lý thêm tin tức
        }
        include "views/admin/news/add.php";
    }

    public function editNews($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Xử lý sửa tin tức
        }
        $news = News::getById($id);
        include "views/admin/news/edit.php";
    }

    public function deleteNews($id) {
        News::deleteById($id);
        header("Location: index.php?controller=admin&action=dashboard");
    }
}
?>

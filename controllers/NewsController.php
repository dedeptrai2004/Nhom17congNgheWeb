<?php
class NewsController {
    public function detail($id) {
        $news = News::getById($id);
        include "views/news/detail.php";
    }
}
?>

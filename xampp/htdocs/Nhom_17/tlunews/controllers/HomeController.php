<?php
class HomeController {
    public function index() {
        $news = News::getAll();
        include "views/home/index.php";
    }

    public function search($query) {
        $news = News::search($query);
        include "views/home/index.php";
    }
}
?>

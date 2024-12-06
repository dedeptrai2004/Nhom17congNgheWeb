<?php
require_once 'config.php';

class News {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM news");
        return $stmt->fetchAll();
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function search($query) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM news WHERE title LIKE ?");
        $stmt->execute(['%' . $query . '%']);
        return $stmt->fetchAll();
    }

    public static function deleteById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM news WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>

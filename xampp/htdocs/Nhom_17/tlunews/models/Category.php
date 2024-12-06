<?php
require_once 'config.php';

class Category {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }
}
?>

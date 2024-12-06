<?php
class Database {
    private static $dbHost = "localhost";
    private static $dbName = "tintuc";
    private static $dbUsername = "root";
    private static $dbUserPassword = "";

    private static $connection = null;

    public static function connect() {
        if (null == self::$connection) {
            try {
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect() {
        self::$connection = null;
    }
}
//test lần 1
?>

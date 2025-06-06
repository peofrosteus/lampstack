<?php
// Database configuration
define('DB_HOST', getenv('MYSQL_HOST'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASS', getenv('MYSQL_PASSWORD'));
define('DB_NAME', getenv('MYSQL_DATABASE'));

// Create PDO connection
function getDbConnection() {
    try {
        $conn = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
            DB_USER,
            DB_PASS
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        throw new Exception("Connection failed: " . $e->getMessage());
    }
}
?> 
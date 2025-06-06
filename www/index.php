<?php
require_once 'inc/db_config.php';

try {
    $conn = getDbConnection();
    echo "Connected successfully to MySQL database!";
} catch(Exception $e) {
    echo $e->getMessage();
}

echo "Hello World!";
?> 
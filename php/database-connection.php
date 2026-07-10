<?php
// Secure Database Connection - Dattatray Bhosale
$host = 'localhost';
$db   = 'your_database_name';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

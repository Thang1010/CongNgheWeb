<?php
// config/db.php
$host = 'localhost';
$dbname = 'sanpham';  // Tên cơ sở dữ liệu
$username = 'root';      // Tên người dùng của MySQL
$password = '';          // Mật khẩu của MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

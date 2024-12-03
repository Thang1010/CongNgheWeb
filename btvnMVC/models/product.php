<?php
// models/Product.php
require_once 'config/db.php';

class Product {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    // Lấy tất cả sản phẩm từ cơ sở dữ liệu
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM Products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm sản phẩm vào cơ sở dữ liệu
    public function add($name, $price, $image) {
        $stmt = $this->pdo->prepare("INSERT INTO Products (Name, Price, Image) VALUES (?, ?, ?)");
        $stmt->execute([$name, $price, $image]);
        
    }

    // Lấy thông tin sản phẩm theo ID
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM Products WHERE Id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Cập nhật thông tin sản phẩm
    public function update($id, $name, $price, $image) {
        $stmt = $this->pdo->prepare("UPDATE Products SET Name = ?, Price = ?, Image = ? WHERE Id = ?");
        $stmt->execute([$name, $price, $image, $id]);
    }

    // Xóa sản phẩm
// models/Product.php

public function delete($id) {
    // Xóa sản phẩm theo ID
    $stmt = $this->pdo->prepare("DELETE FROM Products WHERE Id = ?");
    $stmt->execute([$id]);

    // Cập nhật lại ID của các sản phẩm còn lại
    $this->resetProductIds();
}

public function resetProductIds() {
    // Lấy tất cả các sản phẩm từ database và sắp xếp theo Id
    $stmt = $this->pdo->query("SELECT * FROM Products ORDER BY Id");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Lặp qua tất cả các sản phẩm và cập nhật lại Id
    $newId = 1;  // Bắt đầu từ ID = 1
    foreach ($products as $product) {
        // Cập nhật lại Id cho từng sản phẩm
        $stmt = $this->pdo->prepare("UPDATE Products SET Id = :newId WHERE Id = :oldId");
        $stmt->bindParam(':newId', $newId, PDO::PARAM_INT);
        $stmt->bindParam(':oldId', $product['Id'], PDO::PARAM_INT);
        $stmt->execute();
        $newId++;
    }

    // Đặt lại giá trị AUTO_INCREMENT sao cho ID tiếp theo là phù hợp
    $stmt = $this->pdo->prepare("ALTER TABLE Products AUTO_INCREMENT = :newId");
    $stmt->bindParam(':newId', $newId, PDO::PARAM_INT);
    $stmt->execute();
}


}
?>

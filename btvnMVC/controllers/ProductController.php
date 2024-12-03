<?php
// controllers/ProductController.php
require_once 'models/Product.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    // Hiển thị danh sách sản phẩm
    public function index() {
        $products = $this->productModel->getAll();  // Lấy tất cả sản phẩm từ DB
        include 'views/products/index.php';
    }

    // Thêm sản phẩm
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = '';

            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $target_dir = "img/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image = $target_file;
                }
            }

            $this->productModel->add($name, $price, $image);
            header('Location: index.php');
        } else {
            include 'views/products/add.php';
        }
    }

    // Sửa sản phẩm
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_POST['image'];  // Giữ nguyên ảnh cũ nếu không thay đổi

            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $target_dir = "img/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image = $target_file;
                }
            }

            $this->productModel->update($id, $name, $price, $image);
            header('Location: index.php');
        } else {
            $id = $_GET['id'];
            $product = $this->productModel->getById($id);  // Lấy thông tin sản phẩm từ DB
            include 'views/products/edit.php';
        }
    }

    // Xóa sản phẩm
    public function delete() {
        $id = $_GET['id'];
        $this->productModel->delete($id);
        header('Location: index.php');
    }
}
?>

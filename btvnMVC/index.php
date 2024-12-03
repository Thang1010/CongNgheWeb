<?php
require_once 'controllers/ProductController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$productController = new ProductController();

switch ($action) {
    case 'add':
        $productController->add();
        break;
    case 'edit':
        $productController->edit();
        break;
    case 'delete':
        $productController->delete();
        break;
    default:
        $productController->index();
}
?>

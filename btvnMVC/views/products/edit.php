<?php include 'views/layouts/header.php'; ?>

<h2>Sửa Sản Phẩm</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $product['Id'] ?>">
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" value="<?= htmlspecialchars($product['Name']) ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Giá</label>
        <input type="number" name="price" value="<?= $product['Price'] ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input type="file" name="image" class="form-control">
        <img src="<?= htmlspecialchars($product['Image']) ?>" width="100">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>

<?php include 'views/layouts/footer.php'; ?>

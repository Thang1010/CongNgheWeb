<?php include 'views/layouts/header.php'; ?>

<h2>Thêm Sản Phẩm</h2>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Giá</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Thêm</button>
</form>

<?php include 'views/layouts/footer.php'; ?>

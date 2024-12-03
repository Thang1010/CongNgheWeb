<?php include 'views/layouts/header.php'; ?>

<h2>Danh Sách Sản Phẩm</h2>
<a href="index.php?action=add" class="btn btn-success">Thêm sản phẩm</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['Id'] ?></td>
            <td><?= htmlspecialchars($product['Name']) ?></td>
            <td><?= number_format($product['Price'], 2) ?> VND</td>
            <td><img src="<?= htmlspecialchars($product['Image']) ?>" width="100"></td>
            <td>
                <a href="index.php?action=edit&id=<?= $product['Id'] ?>" class="btn btn-primary">Sửa</a>
                <a href="index.php?action=delete&id=<?= $product['Id'] ?>" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'views/layouts/footer.php'; ?>

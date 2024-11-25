<!DOCTYPE html>
<html>

<head>
    <title>Trang Sản Phẩm</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).on("click", ".edit", function() {
        var id = $(this).data("id");
        var name = $(this).data("name");
        var description = $(this).data("description");
        var images = $(this).data("images");

        $("#edit-id").val(id);
        $("#edit-name").val(name);
        $("#edit-description").val(description);

        var imageContainer = $("#current-images");
        imageContainer.empty();
        if (images && images.length > 0) {
            images.forEach(function(img) {
                var imgTag = '<img src="' + img + '" alt="Ảnh hiện tại" style="width: 100px; margin-right: 10px;">';
                imageContainer.append(imgTag);
            });
        }

        $("#editFlowerModal").modal("show");
    });

    $(document).on("click", ".delete", function() {
        var id = $(this).data("id");
        $("#delete-id").val(id);
        $("#deleteFlowerModal").modal("show");
    });
</script>

</head>

<body>
    <header>
        <h1>Chào mừng đến với Trang Sản Phẩm của Chúng Tôi</h1>
    </header>
</body>

</html>
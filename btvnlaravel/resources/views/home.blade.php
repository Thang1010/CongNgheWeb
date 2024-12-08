<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>List of Posts</h1>

    <!-- Duyệt qua tất cả các bài viết và hiển thị nội dung -->
    @foreach($posts as $post)
        <p>{{ $post->content }}</p>
    @endforeach

</body>
</html>

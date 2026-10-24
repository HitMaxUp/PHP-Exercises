
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 3 - Gửi email nhiều người</title>
</head>
<body>
    <form action="mail3.php" enctype="multipart/form-data" method="POST">
    <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề email">
    <textarea name="content" id="editor" class="form-control"></textarea>
    <input type="file" class="form-control" name="file">
    <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>
</html>

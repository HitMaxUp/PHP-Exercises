
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Gửi email</title>
</head>
<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
    <input type="text" class="form-control" name="email" placeholder="Email">
    <input type="text" class="form-control" name="tieude" placeholder="ten">
    <textarea name="content" id="editor" class="form-control"></textarea>
    <input type="file" class="form-control" name="file" >
    <button type="submit" class="btn btn-primary">Gửi</button>
</body>
</html>


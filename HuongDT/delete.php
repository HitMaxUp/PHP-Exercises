<?php
include 'config.php';
include 'class/class.db.theloai.php';

if (isset($_GET['id'])) {
    $db_theloai = new DB_TheLoai();
    
    // [BỔ SUNG 1]: Ép kiểu số nguyên cho ID để an toàn
    $id = (int)$_GET['id']; 
    
    $result = $db_theloai->xoa_theloai($id);
    
    if ($result) {
        echo '<script>alert("Xóa thành công!"); window.location="theloai.php";</script>';
    } else {
        echo '<script>alert("Xóa không thành công!"); window.location="theloai.php";</script>';
    }
    
    // [BỔ SUNG 2]: Dừng script sau khi đã thực hiện xong lệnh xóa và chuyển hướng
    exit(); 
} else {
    // Nếu truy cập file mà không truyền ID, tự động quay về trang danh sách
    header("Location: theloai.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>THỂ LOẠI | QUẢN TRỊ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- [BỔ SUNG 3]: Sửa lại thẻ script jQuery liền dòng -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Xóa thể loại</h1>
</div>
</body>
</html>
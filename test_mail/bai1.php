<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
 try {
    // $mail->SMTPDebug = 2; // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
    $mail->isSMTP();
    $mail->CharSet = "utf-8";
    $mail->Host = 'smtp.gmail.com';         //SMTP servers
    $mail->SMTPAuth = true;                 // Enable authentication
    $nguoigui = 'minhbkt.25it@vku.udn.vn';  // GMAIL username
    $matkhau = 'ndct rssy jdml jzgc';       // mật khẩu của tài khoản minhbkt.25it@vku.udn.vn
    $tennguoigui = 'minhgui';
    $mail->Username = $nguoigui;            // SMTP username
    $mail->Password = $matkhau;             // SMTP password
    $mail->SMTPSecure = 'ssl';              // encryption TLS/SSL
    $mail->Port = 465;                      // port to connect to
    $mail->setFrom($nguoigui, $tennguoigui );
    $to = "buikhatuanminh1109@gmail.com";
    $to_name = "tuanminh";

    $mail->addAddress($to, $to_name);       //mail và tên người nhận
    // $mail->addAddress("minhbkt.25it@vku.udn.vn","tuanminh"); //có thể add nhiều người nhận
    /* $recipients = "test1@test.com,test2@test.com,test3@test.com,test1@test.com";
    $email_array = explode(",",$recipients);*/
    $mail->isHTML(true);                    // Set email format to HTML
    $mail->Subject = 'Gửi thư từ php';
    $noidungthu = "<b>Chào bạn!</b><br>Chúc an lành!" ;
    $mail->Body = $noidungthu;
    //$mail->addAttachment( '/4.jpg', 'picture.jpg');
    $mail->smtpConnect( array("ssl" => array("verify_peer" => false,"verify_peer_name" => false,"allow_self_signed" => true )));
    $mail->send();
    echo 'Đã gửi mail xong';
} catch (Exception $e) {
    echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
?>

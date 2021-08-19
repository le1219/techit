<?php
//讀取 composer 所下載的套件
require_once('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "iamsophia0903@gmail.com";
$mail->Username   = "iamsophia0903@gmail.com";
$mail->Password   = "euoi knve cvzh mclr";

$mail->IsHTML(true);
$mail->AddAddress("iamsophia0903@gmail.com", "SOPHIA");
$mail->SetFrom("iamsophia0903@gmail.com", "SOPHIA");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "測試我的 PHP 寄信功能";
$content = "驗證碼: <a href='http://localhost/lativ/verify.php?verified_code=dae44e1a4b2cd0bc49b7f9fcc5cff556' target='_blank'>按我啟用</a>";
$mail->MsgHTML($content);

if ($mail->Send()) {
    echo "寄送成功";
} else {
    echo "寄送失敗";
    print_r($mail);
}

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '../PHPMailer/src/Exception.php';
require __DIR__ . '../PHPMailer/src/PHPMailer.php';
require __DIR__ . '../PHPMailer/src/SMTP.php';     

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug  = 2;  // Debugging enabled
        $mail->Debugoutput = 'html';

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ravelonicole.m@gmail.com';
        $mail->Password   = 'yjyvzvgnevqyjnnk'; // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // ✅ SSL Options Fix
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->setFrom('ravelonicole.m@gmail.com', 'Website Contact Form');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('ravelonicole.m@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Message from $name";
        $mail->Body    = nl2br("Name: $name\nEmail: $email\n\nMessage:\n$message");
       
        if ($mail->send()) {
            echo "<script>alert('✅ Message sent successfully!'); window.location.href=document.referrer;</script>";
        } else {
            echo "<script>alert('❌ Message could not be sent.'); window.location.href=document.referrer;</script>";
        }

    } catch (Exception $e) {
        echo "❌ Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "❌ Invalid request.";
}

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $attachement = $_FILES['attachement']['name'];
    $tmp = $_FILES['attachement']['tmp_name'];
    $folder = "./uploads/".time()."_".$attachement;
    move_uploaded_file($tmp,$folder);

    require_once 'PHPMailer/src/Exception.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'autesagar56@gmail.com';                     //SMTP username
    $mail->Password   = 'wffkwtrsddylppjd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vitaursoft@gmail.com', 'VIT');
    $mail->addAddress($email,$name);     //Add a recipient    
    $mail->addReplyTo('vitaursoft@gmail.com', 'VIT');   

    //Attachments    
    $mail->addAttachment($folder, 'VIT.JPG');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "<div style='color:red;font-size:30px'> Message : </div>".$message;
    $mail->AltBody = 'VIT Technology Solution';

    $mail->send();
    echo "<script>alert('Message Has Been Send');</script>";    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

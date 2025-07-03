<?php
    $conn = mysqli_connect("localhost","root","","3pm");

    $text = "123456789987654321123456789987654321";
    $otp = substr(str_shuffle($text),0,6);
    $email = $_POST['email'];
    $query = "UPDATE `users` SET `otp`='$otp' WHERE `email` = '$email'";
    $run = mysqli_query($conn,$query);

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
    $mail->setFrom('autesagar56@gmail.com', 'VIT Trading Services');
    $mail->addAddress($_POST['email'],"OTP");     //Add a recipient    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "<b>One Time Password</b>";
    $mail->Body    = "OTP : <mark>". $otp ."</mark>";
    $mail->AltBody = 'VIT Trading Services';

    $mail->send();
    echo '<script>window.location.assign("change_password.php")</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


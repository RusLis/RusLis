<?php



// print_r(  $_POST );
// print_r(  $_GET );

// $klientoVardas = $_POST['vardas'];
$email = $_POST['email'];
$message = $_POST['message'];



//Load Composer's autoloader
require_once '../libs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );



    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'islikimo.zaidynes';                 // SMTP username
    $mail->Password = 'Batonas12';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom( $email);
    $mail->addAddress('islikimo.zaidynes@gmail.com', 'Puslapiu kurejai');     // Add a recipient

    $mail->addReplyTo( $email); // atrasysime

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Survival Games paklausimas';
    $mail->Body    = $message ;
    $mail->AltBody = $message;

    $mail->send();
    // echo 'Isiuntem zinute sekmingai';
    echo '<script>window.location.href="emailed.php?pranesimas=Žinutė sekmingai išsiusta"; </script>';
} catch (Exception $e) {
    echo 'Nepavyko issiusti. Mailer Error: ', $mail->ErrorInfo;
}

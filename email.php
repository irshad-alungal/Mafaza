<?php
    require 'mailer/PHPMailerAutoload.php';
    function sendMail($subject,$body){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host='smtp.gmail.com';
        $mail->Port=465;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='ssl';
        $mail->Username='errortestingninetysix@gmail.com';
        $mail->Password='vjmtuznupgecjvnb';
        $mail->setFrom('errortestingninetysix@gmail.com','Care Britannica');
        $mail->addAddress('nayanamarkspot@gmail.com');
        $mail->isHTML(true);
        $mail->Subject= $subject;
        $mail->Body=$body;
        if($mail->send()){
            return true;
        }
        else{
            return false;
        }
    }

?>


<?php

require 'email.php';
$html= "";
$subject = 'Enquiry From Care Britannica';
$postParameter=[];
foreach($_POST as $field => $value){
    $html .= "<p><b>$field </b> = ".htmlentities($value)."</p>";
    $postParameter[$field] = htmlentities($value);
}
$mail_status = sendMail($subject,$html);
echo 1;

?>

<?php
$name = $_REQUEST["first-name"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];
$message = $_REQUEST["message"];
$from = "info@adlininternational.com";
$to = "info@adlininternational.com";
$cc = "";
$bcc = "";
$subject = "From adlininternational.com: $name ($phone)";

$body = "<div style='font-family:arial;'>";
$body .= "<p>Hi,</p>";
$body .= "<p>$name wants to contact ADLIN International through the website.</p><br />";
$body .= "<p>First Name: <font style='font-weight:bold;font-size:16px;'>$name</font></p>";
$body .= "<p>Phone No: <font style='font-weight:bold;font-size:16px;'>$phone</font></p>";
$body .= "<p>E-mail: <font style='font-weight:bold;font-size:16px;'>$email</font></p>";
$body .= "<p>Message: <h4>$message</h4></p><br />";
$body .= "<p>Thank You<p>";
//$body .= "<p style='color:gray;font-size:20px;'>ADLIN Trading And Contracting WLL</p>";
//$body .= "<img src='http://www.adlininternational.com/test/images/logo.png' />";
$body .= "</div>";

$header = "From:info@adlininternational.com \r\n";
//$header .= "X-Mailer: php\r\n";
//$header .= "Cc:".$cc." \r\n";
$header .= "Bcc:".$bcc." \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//echo $subject."<br />";
//echo $body;
/*
msg = {
   'MF000': 'Successfully sent!',
   'MF001': 'Recipients are not set!',
   'MF002': 'Form will not work locally!',
   'MF003': 'Please, define email field in your form!',
   'MF004': 'Please, define type of your form!',
   'MF254': 'Something went wrong with PHPMailer!',
   'MF255': 'Aw, snap! Something went wrong.'
};
*/

$retval = mail ($to,$subject,$body,$header);

if( $retval == true ) {
   //echo "Message sent successfully...";
   echo "MF000";
}else {
   //echo "Message could not be sent...";
   echo "MF255";
}
?>
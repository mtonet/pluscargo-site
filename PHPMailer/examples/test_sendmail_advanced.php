<html>
<head>
<title>PHPMailer - Sendmail advanced test</title>
</head>
<body>

<?php

require_once('../class.phpmailer.php');

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
$mail->IsSendmail(); // telling the class to use SendMail transport

try {
  $mail->AddAddress('whoto@otherdomain.com', 'John Doe');
  $mail->SetFrom('name@yourdomain.com', 'First Last');
  $mail->AddReplyTo('name@yourdomain.com', 'First Last');
  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('contents.html'));
  $mail->AddAttachment('images/phpmailer.gif');      // attachment
  $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>

</body>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/23421967-7143-4515-9dde-f9406cbb0d31-loader.js"></script>
</body>
</html>

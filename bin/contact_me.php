<?php
header("Content-Type: text/html; charset=utf-8");
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Неправильно введены данные";
	return false;
   }

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];


// create email body and send it
$to = 'asdas@mail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Сообщение от заказчика с сайта G2-extreme:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Вы получили сообщение с такими контактными данными.\n\n"."Детали:\n\nИмя: $name\n\nТелефон: $phone\n\nEmail: $email_address\n\nТекст сообщения:\n$message";

$headers = "From: mail@g2-extreme.com\n"."Reply-To: $email_address";

mail($to,$email_subject,$email_body, $headers);
return true;
?>

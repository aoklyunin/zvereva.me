  
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//	header('Content-type: text/plain; charset=UTF-8');

$name = trim($_POST['firstname']);
$surname = trim($_POST['surname']);
$message = trim($_POST['message']);
$email =  trim($_POST['email']);

//$subject =  iconv("utf-8","windows-1251","Форма обратной связи");
$subject = "Форма обратной связи";

$emailTo = 'alice@zvereva.me'; //Сюда введите Ваш email
$msg = "Name: $name $surname\n\nEmail: $email \n\nMessage:\n $message";
//$msg = iconv("utf-8","windows-1251",$msg);

$to  = "<info@zvereva.me>, " ; 
$to .= "info@zvereva.me";

$header ="From: =?windows-1251?b?0J7RgtC/0YDQsNCy0LjRgtC10LvRjD89?= <info@zvereva.me>";
$header .="To:  =?windows-1251?b?0J/QvtC70YPRh9Cw0YLQtdC70Yw/PQ==?= <info@zvereva.me>";
$header .="Content-Type: text/plain; charset=«windows-1251»";
$header .="Content-Transfer-Encoding: 8bit";

//$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
//$headers .= "From: От кого письмо <from@example.com>\r\n"; 
//$headers .= "Reply-To: reply-to@example.com\r\n"; 


mail($to, $subject, $msg, $header);


$message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';



//mail($to, $subject, $message, $headers); 
//echo("ye");
header( 'Location: /', true, 307 ); // перебросить на главную страницу сайта с использованием 307 редиректа.

  ?>

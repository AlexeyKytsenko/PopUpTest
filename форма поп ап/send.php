<?php
$tel = $_POST['tel'];
$email = $_POST['email'];
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);
$tel = urldecode($tel);
$email = urldecode($email);
$tel = trim($tel);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("order@salesgenerator.pro", "Заявка с сайта", "Телефон:".$tel."; \r\n  E-mail: ".$email."; \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
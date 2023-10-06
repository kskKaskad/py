<?php
$Имя = $_POST['Имя'];
$email = $_POST['email'];
$Имя = htmlspecialchars($Имя);
$email = htmlspecialchars($email);
$Имя = urldecode($Имя);
$email = urldecode($email);
$Имя = trim($Имя);
$email = trim($email);
//echo $Имя;
//echo "<br>";
//echo $email;
if (mail("FCSMsokolo@yandex.ru", "Заявка с сайта", "ФИО:".$Имя.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
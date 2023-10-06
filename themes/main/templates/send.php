$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
echo $name;
echo "<br>";
echo $email;
$Phone_number = $_POST['Phone_number'];
$date = $_POST['date'];
$Phone_number = htmlspecialchars($Phone_number);
$date = htmlspecialchars($date);
$Phone_number = urldecode($Phone_number);
$date = urldecode($date);
$Phone_number = trim($Phone_number);
$date = trim($date);
echo $Phone_number;
echo "<br>";
echo $date;
$trennn = $_POST['trennn'];
$checkbox = $_POST['checkbox'];
$trennn = htmlspecialchars($trennn);
$checkbox = htmlspecialchars($checkbox);
$trennn = urldecode($trennn);
$checkbox = urldecode($checkbox);
$trennn = trim($trennn);
$checkbox = trim($checkbox);+
echo $trennn;
echo "<br>";
echo $checkbox;

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
//echo $name;
//echo "<br>";
//echo $email;
if (mail("FCSMsokolo@yandex.ru", "Заявка с сайта", "ФИО:".$name". E-mail: ".$email "Номер телефона:".$Phone_number" Дата: ".$date" Тренер: " .$trennn "ФИО:".$name, From: example2@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
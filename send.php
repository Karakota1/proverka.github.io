<?php
/* Принимаем данные из формы */
$name_of_buyer = $_POST["name_of_buyer"]; 
$phone_number = $_POST["phone_number"];

/* Подключаемся к БД */
$db = mysqli_connect('localhost', 'root','', 'Merin'); 
 
/* Записываем данные из формы в БД */
$sql = "INSERT INTO pokupateli(name_of_buyer, phone_number) VALUES ('$name_of_buyer', '$phone_number')";
$result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysql_error());
header('Location: http://asuthebest.ru/index.html');
exit;
?>
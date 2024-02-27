<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localh

$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'ArendaTachek'; //имя базы данных
//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);
//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");
//Формируем тестовый запрос:
$query = "SELECT * FROM catalog WHERE id > 0";
//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($link, $query) or die(mysqli_error($link));
//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$result='';
?>
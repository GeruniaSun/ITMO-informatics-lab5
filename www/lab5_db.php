<?php
$localhost = "localhost";
$db = "lab5Db";
$user = "admin_lab5";
$password = "";
$link = mysqli_connect($localhost, $user, $password)
or trigger_error(mysql_error(), E_USER_ERROR);

//Следующие строки необходимы для того, чтобы MySQL воспринимал кириллицу.
//Параметры функции mysqli_query(): идентификатор соединения с сервером и запрос SQL
mysqli_query($link, "SET NAMES cp1251;") or die(mysql_error());
mysqli_query($link, "SET CHARACTER SET cp1251;") or die(mysql_error());
?>

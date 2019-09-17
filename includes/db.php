<?php

require_once "config.php"
// поместим код подключения
  //соединение с базой данных при помощи функции mysql_connect()
  //в аргументах функции укажите имя сервера, логин и пароль. 
   
  $connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name'],
   );
  if ($connection == false)
{
	echo "Не удалось подключиться к базе данных"; 
	echo mysqli_error();
	exit();
} ;
?>


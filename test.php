<?php
   $host = "127.0.0.1";
   $user = "vunyuya";
   $pass = "70051461";
   $db = "laba2";
   $port = 3306;
  $mysqli = new mysqli($host, $username, $password, $dbname);
  // проверка соединения
  $mysqli->connect_errno; // последняя ошибка соединения
?>

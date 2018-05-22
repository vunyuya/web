<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>СКЕЙТШОП</title>
  <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<div class="menu">
  <div class="menu-item">
    <a href="index.html">Каталог</a>
  </div>
  <div class="menu-item">
    <a href="gallery.html">Фотогалерея <br> магазинов</a>
  </div>
  <div class="menu-item">
    <a href="order.html">Заказать</a>
  </div>
  <div class="menu-item logo">
    <img src="images/logo.png" alt="СКЕЙТШОП">
  </div>
</div>

<?php 
    $Email = $_POST['Email'];
    $Adress = $_POST['Adress'];
    $ID_Goods = $_POST['ID_Goods'];
    
    $host = "127.0.0.1";
    $user = "vunyuya";
    $pass = "70051461";
    $db = "laba2";
    $port = 3306;
    $mysqli = new mysqli($host, $user, $pass, $db);
    mysqli_set_charset($mysqli, 'utf8');
    
    $query = "INSERT INTO Purchases (Email, Adress, ID_Goods) VALUES ('$Email','$Adress', '$ID_Goods')";
    $result = mysqli_query ($mysqli, $query);
    
    if ($result = 'true'){
        echo "Заказ совершен!";
    }else{
        echo "Заказ не прошел:(";
    }
?>
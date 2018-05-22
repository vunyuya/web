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

<?php
    $host = "127.0.0.1";
    $user = "vunyuya";
    $pass = "70051461";
    $db = "laba2";
    $port = 3306;
    
    $mysqli = new mysqli($host, $user, $pass, $db);
    mysqli_set_charset($mysqli, 'utf8');
    
    $query = "select * from Goods where ID=8";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($result); 
  ?>
  
<div class="menu">
  <div class="menu-item">
    <a href="index.php">Каталог</a>
  </div>
  <div class="menu-item">
    <a href="gallery.html">Фотогалерея <br> магазинов</a>
  </div>
  <div class="menu-item">
    <a href="order.php">Заказать</a>
  </div>
  <div class="menu-item logo">
    <img src="images/logo.png" alt="СКЕЙТШОП">
  </div>
</div>
<div class="good">
  <div class="good-image">
    <?php echo "<img src='" . $row["Image"] . "'/>"; ?>
  </div>
  <div class="good-about">
    <div class="good-bold">
      <?php echo $row["Name"] ?>
    </div>
    <div class="good-text">
      <?php echo $row["Info"] ?>
    </div>
    <div class="good-price">
      <?php echo $row["Price"]." руб" ?>
    </div>
    <div class="good-price">
      <?php echo "ID: ".$row["ID"] ?>
    </div>
  </div>
</div>

<div class="footer">Ежов Иван, 2018</div>

</body>
</html>

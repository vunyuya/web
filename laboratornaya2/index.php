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
?>

<?php
$query = "select * from Goods";
$result = mysqli_query($mysqli, $query);
 while ($row = mysqli_fetch_assoc($result)) {
        $Name[$row["ID"]] = $row["Name"];
        $Image[$row["ID"]] = $row["Image"];
        $ID[$row["ID"]] = $row["ID"];
        $Price[$row["ID"]] = $row["Price"];
    }
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
<div class="goods">
  <div class="goods-column">
    <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[1] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="union.php">
            <?php echo $Name[1]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[1]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[1] ?>
        </div>
      </div>
    </div>
    
    <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[2] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="longboard.php">
            <?php echo $Name[2]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[2]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[2] ?>
        </div>
      </div>
    </div>
    
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[3] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="trucks.php">
            <?php echo $Name[3]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[3]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[3] ?>
        </div>
      </div>
    </div>
    
  </div>
  <div class="goods-column">
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[4] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="deka.php">
            <?php echo $Name[4]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[4]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[4] ?>
        </div>
      </div>
    </div>
    
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[5] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="wheels.php">
            <?php echo $Name[5]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[5]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[5] ?>
        </div>
      </div>
    </div>
    
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[6] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="griptape.php">
            <?php echo $Name[6]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[6]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[6] ?>
        </div>
      </div>
    </div>
    
  </div>
  <div class="goods-column">
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[7] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="bearings.php">
            <?php echo $Name[7]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[7]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[7] ?>
        </div>
      </div>
    </div>
    
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[8] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="bolts.php">
            <?php echo $Name[8]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[8]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[8] ?>
        </div>
      </div>
    </div>
    
     <div class="goods-item">
      <div class="goods-image">
       <?php echo "<img src='" . $Image[9] . "'/>"; ?>
      </div>
      <div class="goods-text">
        <div class="goods-name">
          <a href="tool.php">
            <?php echo $Name[9]; ?>
          </a>
        </div>
        <div class="goods-price">
          <?php echo $Price[9]." руб"; ?>
        </div>
        <div class="goods-price">
          <?php echo "ID: ".$ID[9] ?>
        </div>
      </div>
    </div>
    
  </div>
</div>

<div class="footer">Ежов Иван, 2018</div>

</body>
</html>

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

  <form class="form" action="add.php" method="post">
    <div class="info">
      <label>
        Электронная почта:
        <input type="email" placeholder="admin@admin.admin" name="Email"></input>
      </label>
      <br><br>
      <label>
        Адрес: <br>
        <input type="text" name="Adress"></input>
      </label>
    </div>
    <div class="info">
      <label>
        ID заказываемого товара: <br>
        <input type="number" name="ID_Goods"></input>
      </label>
    </div>
    <input type="submit" value="Заказать">
  </form>

  <div class="footer">Ежов Иван, 2018</div>

  </body>
  </html>

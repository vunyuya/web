{"changed":true,"filter":false,"title":"wheels.php","tooltip":"/wheels.php","value":"<!DOCTYPE html>\n<html lang=\"ru\">\n<head>\n  <meta charset=\"UTF-8\">\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">\n  <title>СКЕЙТШОП</title>\n  <link rel=\"stylesheet\" href=\"styles/main.css\">\n</head>\n<body>\n\n<?php\n    $host = \"127.0.0.1\";\n    $user = \"vunyuya\";\n    $pass = \"70051461\";\n    $db = \"laba2\";\n    $port = 3306;\n    \n    $mysqli = new mysqli($host, $user, $pass, $db);\n    mysqli_set_charset($mysqli, 'utf8');\n    \n    $query = \"select * from Goods where ID=5\";\n    $result = mysqli_query($mysqli, $query);\n    $row = mysqli_fetch_assoc($result); \n  ?>\n  \n<div class=\"menu\">\n  <div class=\"menu-item\">\n    <a href=\"index.php\">Каталог</a>\n  </div>\n  <div class=\"menu-item\">\n    <a href=\"gallery.html\">Фотогалерея <br> магазинов</a>\n  </div>\n  <div class=\"menu-item\">\n    <a href=\"order.php\">Заказать</a>\n  </div>\n  <div class=\"menu-item logo\">\n    <img src=\"images/logo.png\" alt=\"СКЕЙТШОП\">\n  </div>\n</div>\n<div class=\"good\">\n  <div class=\"good-image\">\n    <?php echo \"<img src='\" . $row[\"Image\"] . \"'/>\"; ?>\n  </div>\n  <div class=\"good-about\">\n    <div class=\"good-bold\">\n      <?php echo $row[\"Name\"] ?>\n    </div>\n    <div class=\"good-text\">\n      <?php echo $row[\"Info\"] ?>\n    </div>\n    <div class=\"good-price\">\n      <?php echo $row[\"Price\"].\" руб\" ?>\n    </div>\n    <div class=\"good-price\">\n      <?php echo \"ID: \".$row[\"ID\"] ?>\n    </div>\n  </div>\n</div>\n\n<div class=\"footer\">Ежов Иван, 2018</div>\n\n</body>\n</html>\n","undoManager":{"mark":3,"position":6,"stack":[[{"start":{"row":11,"column":0},"end":{"row":46,"column":6},"action":"remove","lines":["<div class=\"menu\">","  <div class=\"menu-item\">","    <a href=\"index.html\">Каталог</a>","  </div>","  <div class=\"menu-item\">","    <a href=\"gallery.html\">Фотогалерея <br> магазинов</a>","  </div>","  <div class=\"menu-item\">","    <a href=\"order.html\">Заказать</a>","  </div>","  <div class=\"menu-item logo\">","    <img src=\"images/logo.png\" alt=\"СКЕЙТШОП\">","  </div>","</div>","<div class=\"good\">","  <div class=\"good-image\">","    <img src=\"images/wheels.png\">","  </div>","  <div class=\"good-about\">","    <div class=\"good-bold\">","      Колеса Flip ODYSSEY LOGO","    </div>","    <div class=\"good-text\">","      Классические колеса с логотипом Flip для уличного","      катания и покорения новых трюков в скейт-парке.","      <p>Особенности:","      <ul>","        <li>Логотип Flip</li>","        <li>Комплект из 4 штук</li>","      </ul>","    </div>","    <div class=\"good-price\">","      2 550,00 руб.","    </div>","  </div>","</div>"],"id":2},{"start":{"row":11,"column":0},"end":{"row":56,"column":6},"action":"insert","lines":["<?php","    $host = \"127.0.0.1\";","    $user = \"vunyuya\";","    $pass = \"70051461\";","    $db = \"laba2\";","    $port = 3306;","    ","    $mysqli = new mysqli($host, $user, $pass, $db);","    $query = \"select * from Goods where ID=2\";","    $result = mysqli_query($mysqli, $query);","    $row = mysqli_fetch_assoc($result); ","  ?>","  ","<div class=\"menu\">","  <div class=\"menu-item\">","    <a href=\"index.php\">Каталог</a>","  </div>","  <div class=\"menu-item\">","    <a href=\"gallery.html\">Фотогалерея <br> магазинов</a>","  </div>","  <div class=\"menu-item\">","    <a href=\"order.php\">Заказать</a>","  </div>","  <div class=\"menu-item logo\">","    <img src=\"images/logo.png\" alt=\"СКЕЙТШОП\">","  </div>","</div>","<div class=\"good\">","  <div class=\"good-image\">","    <?php echo \"<img src='\" . $row[\"Image\"] . \"'/>\"; ?>","  </div>","  <div class=\"good-about\">","    <div class=\"good-bold\">","      <?php echo $row[\"Name\"] ?>","    </div>","    <div class=\"good-text\">","      <?php echo $row[\"Info\"] ?>","    </div>","    <div class=\"good-price\">","      <?php echo $row[\"Price\"].\" руб\" ?>","    </div>","    <div class=\"good-price\">","      <?php echo \"ID: \".$row[\"ID\"] ?>","    </div>","  </div>","</div>"]}],[{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"remove","lines":["2"],"id":3}],[{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["5"],"id":4}],[{"start":{"row":59,"column":0},"end":{"row":60,"column":35},"action":"remove","lines":["","<script src=\"js/index.js\"></script>"],"id":5}],[{"start":{"row":18,"column":51},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":40},"action":"insert","lines":["mysqli_set_charset($mysqli, 'utf8');"],"id":7}],[{"start":{"row":19,"column":40},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":4},"end":{"row":20,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526820477673}
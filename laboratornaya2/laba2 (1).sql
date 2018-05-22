-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2018 г., 15:01
-- Версия сервера: 5.5.57-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `laba2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Goods`
--

CREATE TABLE IF NOT EXISTS `Goods` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Info` varchar(1000) NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `Goods`
--

INSERT INTO `Goods` (`ID`, `Name`, `Image`, `Info`, `Price`) VALUES
(1, 'Скейтборд в сборе ЮНИОН', 'https://laba2-vunyuya.c9users.io/images/union.png', 'Сбалансированный снаряд Pool из новой коллекции ЮНИОН в минималистичном\r\n      стиле. Прочная конструкция из древесины клена создана с применением\r\n      новейших технологий - легкая и устойчивая к перепадам температуры,\r\n      отлично подходит новичкам и продвинутым райдерам. Just buy and go skate!\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Скейтбордический комплект</li>\r\n        <li>Конкейв: Medium</li>\r\n        <li>Технология холодного пресса, которая позволяет сделать доску прочной и надёжной, минимизируется риск возникновения "винта"</li>\r\n        <li>Применяемый эпоксидный клей повысил устойчивость к температурным перепадам и расслоениям</li>\r\n        <li>Размер деки: 8" x 32" (20,32 х 81,28 см)</li>\r\n        <li>Подвеска: 139 мм </li>\r\n        <li>Колеса: 51 мм с жесткостью 100A</li>\r\n        <li>Подшипники: Юнион Abec 7</li>\r\n        <li>Материал: 100% прочный канадский клён </li>\r\n      </ul>', 3800),
(2, 'Комплект лонгборд Z-Flex Z-BAR CRUISER', 'https://laba2-vunyuya.c9users.io/images/longboard.png', 'Этот классический круизер вдохновлен традиционной формой деки,\r\n      которая появилась еще 70хх годах прошлого века.\r\n      Благодаря ей Вы получите отличную плавность хода на\r\n      любой поверхности и легкую управляемость.\r\n      Отличный вариант для тех, кто хочет компактную доску,\r\n      которая будет всегда под рукой.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>7-слойная дека из твердого канадского клена</li>\r\n        <li>Длина: 75 см (29,5")</li>\r\n        <li>Ширина: 19 см (7,5")</li>\r\n        <li>Колесная база: 40 см (15,75")</li>\r\n        <li>Подвески: 125 мм Rough Polished Z-Flex Trucks</li>\r\n        <li>Колеса: 60 мм, жесткость 90А </li>\r\n        <li>Подшипники: ABEC7.</li>\r\n      </ul>', 7950),
(3, 'Подвески Footwork Block', 'https://laba2-vunyuya.c9users.io/images/trucks.png', 'Надежные подвески Block запекаются при высокой\r\n      температуре. Высокое качество, отличная управляемость\r\n      и покраска нового поколения - все в лучших традициях Footwork.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Подвески для скейтборда</li>\r\n        <li>Традиционный алюминиевый хангер и база</li>\r\n        <li>Качественная покраска</li>\r\n        <li>Амортизаторы средней жесткости 92A</li>\r\n        <li>Доступные размеры: ширина Raw  5” / 5.25” / 5.5” / 6”</li>\r\n        <li>Доступные размеры: ширина Raw  5” / 5.25” / 5.5” </li>\r\n        <li>Стандартная высота подвески</li>\r\n      </ul>', 1700),
(4, 'Дека АБСУРД', 'https://laba2-vunyuya.c9users.io/images/deka.png', 'Совместная работа Absurd Skateboards и группы «Ночные кобры»\r\n       будет отличным вариантом для сбора Вашего нового комплекта на\r\n       предстоящий сезон. Твердый канадский клен и классическая конструкция -\r\n       все на месте и ничего лишнего.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Дека для скейтборда</li>\r\n        <li>Надежная конструкция из 7 слоев канадского клена</li>\r\n        <li>Размеры: 8.25" х 32" (20,9 х 69,8 см).</li>\r\n      </ul>', 3500),
(5, 'Колеса Flip ODYSSEY LOGO', 'https://laba2-vunyuya.c9users.io/images/wheels.png', 'Классические колеса с логотипом Flip для уличного\r\n      катания и покорения новых трюков в скейт-парке.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Логотип Flip</li>\r\n        <li>Комплект из 4 штук</li>\r\n      </ul>', 2550),
(6, 'Шкурка для деки SPITFIRE GRIP TAPE K.T.U.L', 'https://laba2-vunyuya.c9users.io/images/griptape.png', 'Надежная шкурка для деки Вашего скейтборда от Spitfire.\r\n      Она удобно и быстро монтируется,\r\n      благодаря супер-липкому клею, имеет стандартные размеры и привлекательную\r\n      графику.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Шкурка для скейтборда</li>\r\n        <li>Размеры: 9 х 33" (22,0 х 80,8 см)</li>\r\n        <li>Супер-липкий клей, выдерживающий перепады температур.</li>\r\n      </ul>', 950),
(7, 'Подшипники Flip ABEC7', 'https://laba2-vunyuya.c9users.io/images/bearings.png', 'Самые быстрые подшипники стали еще быстрее.\r\n      Новая конструкция оболочки увеличивают скорость и\r\n      долговечность, так что настало время проверить это лично.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Долговечные и надежные подшипники</li>\r\n        <li>Новая конструкция оболочки</li>\r\n        <li>Предварительно смазаны специальной смазкой для скоростного катания</li>\r\n        <li>8 подшипников в комплекте.</li>\r\n      </ul>', 880),
(8, 'Винты Jart PACK MOUNTING BOLTS ALLEN', 'https://laba2-vunyuya.c9users.io/images/bolts.png', 'Восемь надежных болтов и ключ - полезный набор от Jart Skateboards, благодаря\r\n      которому Вас не застать врасплох. С ним можно собрать новый комплект,\r\n      а можно положить в рюкзак на тот случай, когда без них будет очень непросто.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Набор запасных частей для скейтборда</li>\r\n        <li>Восемь прочных 1" болтов</li>\r\n        <li>Ключ Allen.</li>\r\n      </ul>', 350),
(9, 'Инструмент GRIND T SKATE TOOL', 'https://laba2-vunyuya.c9users.io/images/tool.png', 'Эту удобную отвертку от Grind можно бросить в рюкзак и забыть о ее существовании. Возможно,\r\n      она никогда Вам не понадобится. Но если это произойдет, гораздо проще и\r\n      удобнее достать ее из кармана, чем пытаться обойтись подручными средствами.\r\n      <p>Особенности:\r\n      <ul>\r\n        <li>Ключ для скейтборда</li>\r\n        <li>Двусторонняя отвертка</li>\r\n        <li>Разъемы для гаек на подвеске</li>\r\n      </ul>', 490);

-- --------------------------------------------------------

--
-- Структура таблицы `Purchases`
--

CREATE TABLE IF NOT EXISTS `Purchases` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `ID_Goods` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `Purchases`
--

INSERT INTO `Purchases` (`ID`, `Email`, `Adress`, `ID_Goods`) VALUES
(1, 'dwdwq', 'dwqq', 2),
(2, 'wqeqe@mail.ru', '313dfwef', 1),
(3, 'w22@haha', 'fdfs', 2),
(4, '9wep@mail', 'fdfs', 7),
(5, '9wep@mail.com', 'fdfs', 2),
(6, '123@xn--b1agard8aj.xn--p1ag', 'Далекр', 5),
(7, '123@xn--b1agard8aj.xn--p1ag', 'Далекр', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

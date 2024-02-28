-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2024 г., 13:36
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ArendaTachek`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `ava_rent` tinyint(1) NOT NULL,
  `title` text NOT NULL,
  `city` text NOT NULL,
  `category` text NOT NULL,
  `full_name` text NOT NULL,
  `year` int NOT NULL,
  `engin` text NOT NULL,
  `engin_capacity` text NOT NULL,
  `horse` text NOT NULL,
  `cost_max` text NOT NULL,
  `cost_med` text NOT NULL,
  `cost_min` text NOT NULL,
  `full_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `ava_rent`, `title`, `city`, `category`, `full_name`, `year`, `engin`, `engin_capacity`, `horse`, `cost_max`, `cost_med`, `cost_min`, `full_description`) VALUES
(1, 1, 'bmw', 'Ногинск', 'suv', 'BMW X2', 2021, 'Дизель', '2.0 ', '190 ', '10000 ', '8000 ', '6500 ', 'BMW X2 — среднеразмерный кроссовер от немецкого автопроизводителя BMW. Автомобиль был представлен в 2016 году в Париже. Серийно автомобиль производится с октября 2017 года. На рынки автомобиль поставляется с марта 2018 года. \r\nАвтомобиль BMW X2 базируется на той же платформе, что и Mini Countryman, а также BMW X1. Длина колёсной базы варьируется до 2670 мм.\r\n\r\nМодель собирается в немецком городе Регенсбург, параллельно с BMW X1. Автомобиль производится с полноприводной компоновкой xDrive.'),
(2, 1, 'kia', 'Ногинск', 'suv', 'Kia Sportage', 2022, 'Бензин', '2.5 ', '190 ', '9000 ', '8000 ', '7000 ', 'Экстерьер Kia Sportage 2022 отличается новым дизайном кузова, который стал результатом совместной работы дизайнеров из Кореи, Китая, США и Германии. В основе дизайна экстерьера лежит сочетание чистого силуэта с простыми боковыми линиями и сложного кроссовера спереди и сзади. В результате, на светотехнике и радиаторной решетке присутствуют многочисленные бумерангообразные кронштейны и элементы. Кроме того, можно приобрести за дополнительную плату внедорожный стиль X-Line, который включает различные бамперы, защиту и рейлинги (фото выше). Более дорогой вариант будет доступен в двухцветном исполнении с черной крышей.'),
(3, 1, 'lexus', 'Ногинск', 'sport', 'Lexus IS', 2018, 'Бензин', '2.0 ', '245 ', '5000 ', '4000 ', '3000 ', 'Lexus IS – японский спортивный автомобиль представительского класса, выпускаемый на производственных мощностях компании Toyota. Впервые модель была представлена в 1998 году, и уже спустя несколько месяцев начались её поставки в Европу. IS является аббревиатурой словосочетания «Intelligent sport». Автомобиль считается одним из самых безопасных в сегменте. В 2013 году независимая организация EURO NCAP наградила систему безопасности IS наивысшей оценкой – «5 звёзд».'),
(4, 1, 'jaguar', 'Ногинск', 'business', 'Jaguar XF', 2012, 'Бензин', '3.0 ', '238 ', '3000 ', '2500 ', '2000 ', 'История и обзор модели\r\nJaguar XF — заднеприводный пятиместный седан класса Е. Премьера серийной версии Ягуар XF состоялась в 2007 году на AWтосалоне во Франкфурте. В 2009 году на AWтосалоне в Детройте состоялся дебют спортивной версии Ягуара XF — Jaguar XFR.'),
(5, 1, 'toyota', 'Ногинск', 'suv', 'Toyota RAV4', 2017, 'Бензин', '2.0 ', '146 ', '4000 ', '3500 ', '3000 ', 'японский кроссовер-долгожитель является самым практичным и одним из самых продуманных семейных автомобилей для перевозки багажа. Задние спинки сидений складывают быстро и очень просто. Когда они будут в нижнем положении вам откроется удовлетворительная картина, то есть- 2078 куб. литра для перевозки любых грузов или для других целей.'),
(6, 1, 'mercedes-benz', 'Ногинск', 'sport', 'Mercedes-Benz CLS 63 AMG', 2017, 'Бензин', '5.5 ', '585 ', '9000 ', '8500 ', '8000 ', 'Мercedes-Benz CLS – удачное сочетание классического стиля, комфорта и спортивных характеристик.\r\nТо, что он «Мерседес», любой определит с первого взгляда, даже если убрать огромную звезду с решетки радиатора. В то же время ни «лицом», ни «осанкой» купе CLS не повторяет ни одну из родственных моделей.');

-- --------------------------------------------------------

--
-- Структура таблицы `deleted`
--

CREATE TABLE `deleted` (
  `id` int NOT NULL,
  `ava_rent` tinyint(1) NOT NULL,
  `title` text NOT NULL,
  `city` text NOT NULL,
  `category` text NOT NULL,
  `full_name` text NOT NULL,
  `year` int NOT NULL,
  `engin` text NOT NULL,
  `engin_capacity` text NOT NULL,
  `horse` text NOT NULL,
  `cost_max` text NOT NULL,
  `cost_med` text NOT NULL,
  `cost_min` text NOT NULL,
  `full_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deleted`
--
ALTER TABLE `deleted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `deleted`
--
ALTER TABLE `deleted`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

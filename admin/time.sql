-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 06 2018 г., 00:27
-- Версия сервера: 5.7.21-0ubuntu0.16.04.1
-- Версия PHP: 7.1.13-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `time`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `g_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `g_price`, `price`, `img`, `description`) VALUES
(1, 'GT88', 3700, 3600, 'product_1.jpg', 'Классика всегда в моде!'),
(2, 'KW88', 7390, 6990, 'product_2.jpg', 'Будущее уже настало!'),
(3, 'KW98', 7500, 6990, 'kw98pre.jpg', 'Единственные в своем роде'),
(4, 'GT08 v2', 2700, 2600, 'gt08v2kw.jpg', 'Навстречу будущему'),
(5, 'KW18', 4200, 3990, 'product_4.jpg', 'Лучшие выбирают лучшее!'),
(6, 'DZ09m17', 2700, 2660, 'product_5.jpg', 'Делаем жизнь проще!'),
(7, 'KW08', 2700, 2600, 'product_6.jpg', 'KW08 - выделяйся!'),
(8, 'GV68', 3800, 3600, 'gv68-m.jpg', 'Да! Настоящий GV68'),
(9, 'KW99', 8000, 7700, 'kw99.jpg', 'KW99 - умнее не бывает'),
(10, 'KW28', 4900, 4600, 'kw28-k.jpg', 'KW28 - двигаться вперед');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

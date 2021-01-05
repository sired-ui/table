-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2019 г., 16:09
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shulte`
--

-- --------------------------------------------------------

--
-- Структура таблицы `top`
--

CREATE TABLE `top` (
  `id` int(3) NOT NULL,
  `timeg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timescore` int(20) NOT NULL,
  `type` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `top`
--

INSERT INTO `top` (`id`, `timeg`, `timescore`, `type`) VALUES
(4, '1576664117', 7, '9'),
(5, '1576664846', 11, '16'),
(6, '1576665259', 7, '9'),
(7, '1576665267', 5, '9'),
(8, '1576665293', 5, '9'),
(9, '1576665305', 10, '9'),
(10, '1576665740', 97, '36'),
(11, '1576665801', 38, '25'),
(12, '1576665895', 65, '36'),
(13, '1576665988', 71, '36'),
(14, '1576666021', 6, '9');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `top`
--
ALTER TABLE `top`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

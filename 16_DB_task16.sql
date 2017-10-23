-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 20 2017 г., 16:20
-- Версия сервера: 5.5.57
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task16`
--

-- --------------------------------------------------------

--
-- Структура таблицы `objects`
--

CREATE TABLE `objects` (
  `ob_id` int(11) NOT NULL,
  `object` longtext NOT NULL,
  `ob_name` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `objects`
--

INSERT INTO `objects` (`ob_id`, `object`, `ob_name`) VALUES
(72, 'O:8:\"MyObject\":3:{s:4:\"name\";s:5:\"vasya\";s:8:\"lastname\";s:7:\"poopkin\";s:3:\"age\";i:20;}', 'MyObject'),
(73, 'O:8:\"MyObject\":3:{s:4:\"name\";s:5:\"vasya\";s:8:\"lastname\";s:7:\"poopkin\";s:3:\"age\";i:20;}', 'MyObject'),
(74, 'O:8:\"MyObject\":3:{s:4:\"name\";s:5:\"vasya\";s:8:\"lastname\";s:7:\"poopkin\";s:3:\"age\";i:20;}', 'MyObject'),
(75, 'O:8:\"MyObject\":3:{s:4:\"name\";s:5:\"vasya\";s:8:\"lastname\";s:7:\"poopkin\";s:3:\"age\";i:20;}', 'MyObject');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`ob_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `objects`
--
ALTER TABLE `objects`
  MODIFY `ob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

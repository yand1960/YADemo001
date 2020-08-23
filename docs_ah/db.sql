-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 23 2020 г., 14:11
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE SCHEMA IF NOT EXISTS `luboe` DEFAULT CHARACTER SET utf8 ;
USE `luboe`;

--
-- База данных: `luboe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ahappointments`
--

CREATE TABLE `ahappointments` (
  `Id` int(11) NOT NULL,
  `Name` varchar(48) NOT NULL,
  `date` datetime NOT NULL,
  `ahevents_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `ahappointments`
--

INSERT INTO `ahappointments` (`Id`, `Name`, `date`, `ahevents_id`) VALUES
(1, 'Александр', '2020-08-10 10:00:00', 1),
(2, 'Леха', '2020-08-18 11:00:00', 2),
(3, 'Марина', '2020-08-01 12:00:00', 3),
(10, 'Кирилл', '2020-08-16 13:00:00', 2),
(11, 'Владимир', '2020-08-16 14:00:00', 4),
(12, 'Олег', '2020-08-16 15:00:00', 5),
(13, 'Екатерина', '2020-08-16 16:00:00', 5),
(14, 'test', '2020-08-16 15:30:00', 1),
(15, 'test', '2020-08-17 16:30:00', 2),
(16, 'undefined', '2020-08-16 12:30:00', 3),
(17, '', '2020-08-16 19:00:00', 4),
(18, 'undefined', '2020-08-16 17:00:00', 5),
(19, 'test', '2020-08-16 17:30:00', 1),
(20, 'test', '2020-08-16 19:30:00', 2),
(21, '', '2020-08-16 20:00:00', 3),
(22, '', '2020-08-16 10:30:00', 4),
(23, 'undefined', '2020-08-17 13:30:00', 5),
(24, 'asd', '2020-08-16 14:30:00', 1),
(25, 'test', '2020-08-16 15:30:00', 2),
(26, '', '2020-08-16 16:30:00', 3),
(27, '', '2020-08-16 20:30:00', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `ahevents`
--

CREATE TABLE `ahevents` (
  `Id` int(11) NOT NULL,
  `Name` varchar(48) NOT NULL,
  `Description` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `ahevents`
--

INSERT INTO `ahevents` (`Id`, `Name`, `Description`) VALUES
(1, 'Математика', ''),
(2, 'Обществознание', ''),
(3, 'Русский язык', ''),
(4, 'Литература', ''),
(5, 'Английский язык', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ahappointments`
--
ALTER TABLE `ahappointments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `appointmentsblabla` (`ahevents_id`);

--
-- Индексы таблицы `ahevents`
--
ALTER TABLE `ahevents`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ahappointments`
--
ALTER TABLE `ahappointments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `ahevents`
--
ALTER TABLE `ahevents`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ahappointments`
--
ALTER TABLE `ahappointments`
  ADD CONSTRAINT `ahappointments_ibfk_1` FOREIGN KEY (`ahevents_id`) REFERENCES `ahevents` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

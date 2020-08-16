-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 16 2020 г., 12:09
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nzappointments`
--
CREATE DATABASE IF NOT EXISTS `nzappointments` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `nzappointments`;

-- --------------------------------------------------------

--
-- Структура таблицы `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `date` datetime NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `date`, `event_id`) VALUES
(1, 'Василий', '2020-09-03 10:00:00', 1),
(2, 'Пётр', '2020-09-03 11:00:00', 1),
(3, 'Сергей', '2020-09-03 10:00:00', 2),
(4, 'Евгений', '2020-09-03 11:00:00', 2),
(5, 'Николай', '2020-09-03 10:00:00', 3),
(6, 'Иван', '2020-09-03 11:00:00', 3),
(7, NULL, '2020-09-03 12:00:00', 1),
(8, NULL, '2020-09-03 13:00:00', 1),
(9, NULL, '2020-09-03 14:00:00', 1),
(10, NULL, '2020-09-03 15:00:00', 1),
(11, NULL, '2020-09-03 16:00:00', 1),
(12, NULL, '2020-09-03 17:00:00', 1),
(13, NULL, '2020-09-03 18:00:00', 1),
(14, NULL, '2020-09-03 19:00:00', 1),
(15, NULL, '2020-09-03 12:00:00', 2),
(16, NULL, '2020-09-03 13:00:00', 2),
(17, NULL, '2020-09-03 14:00:00', 2),
(18, NULL, '2020-09-03 15:00:00', 2),
(19, NULL, '2020-09-03 16:00:00', 2),
(20, NULL, '2020-09-03 17:00:00', 2),
(21, NULL, '2020-09-03 18:00:00', 2),
(22, NULL, '2020-09-03 19:00:00', 2),
(23, NULL, '2020-09-03 12:00:00', 3),
(24, NULL, '2020-09-03 13:00:00', 3),
(25, NULL, '2020-09-03 14:00:00', 3),
(26, NULL, '2020-09-03 15:00:00', 3),
(27, NULL, '2020-09-03 16:00:00', 3),
(28, NULL, '2020-09-03 17:00:00', 3),
(29, NULL, '2020-09-03 18:00:00', 3),
(30, NULL, '2020-09-03 19:00:00', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name`, `description`) VALUES
(1, 'Математика', 'Экзамен по математике'),
(2, 'Физика', 'Экзамен по физике'),
(3, 'Химия', 'Экзамен по химии');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Appointments_fk0` (`event_id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `Appointments_fk0` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

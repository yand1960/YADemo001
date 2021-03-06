-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 16 2020 г., 16:02
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

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `date` datetime NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

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
(7, 'Ban', '2020-09-03 12:00:00', 1),
(8, 'Karl', '2020-09-03 13:00:00', 1),
(9, 'Dan', '2020-09-03 14:00:00', 1),
(10, 'dfsdf', '2020-09-03 15:00:00', 1),
(11, 'Van', '2020-09-03 16:00:00', 1),
(12, NULL, '2020-09-03 17:00:00', 1),
(13, NULL, '2020-09-03 18:00:00', 1),
(14, NULL, '2020-09-03 19:00:00', 1),
(15, 'safdf', '2020-09-03 12:00:00', 2),
(16, 'asfd', '2020-09-03 13:00:00', 2),
(17, 'dddddddddddddddd', '2020-09-03 14:00:00', 2),
(18, 'lksdfkljsdklfj', '2020-09-03 15:00:00', 2),
(19, 'Abrams', '2020-09-03 16:00:00', 2),
(20, NULL, '2020-09-03 17:00:00', 2),
(21, NULL, '2020-09-03 18:00:00', 2),
(22, NULL, '2020-09-03 19:00:00', 2),
(23, NULL, '2020-09-03 12:00:00', 3),
(24, NULL, '2020-09-03 13:00:00', 3),
(25, NULL, '2020-09-03 14:00:00', 3),
(26, NULL, '2020-09-03 15:00:00', 3),
(27, 'Сергей', '2020-09-03 16:00:00', 3),
(28, NULL, '2020-09-03 17:00:00', 3),
(29, NULL, '2020-09-03 18:00:00', 3),
(30, NULL, '2020-09-03 19:00:00', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name`, `description`) VALUES
(1, 'Математика', 'Экзамен по математике Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития. Таким образом сложившаяся структура организации позволяет оценить значение форм развития. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации дальнейших направлений развития.'),
(2, 'Физика', 'Экзамен по физике Значимость этих проблем настолько очевидна, что новая модель организационной деятельности позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Равным образом консультация с широким активом влечет за собой процесс внедрения и модернизации систем массового участия. С другой стороны реализация намеченных плановых заданий представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также сложившаяся структура организации позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Товарищи! консультация с широким активом способствует подготовки и реализации форм развития. Идейные соображения высшего порядка, а также укрепление и развитие структуры влечет за собой процесс внедрения и модернизации модели развития.'),
(3, 'Химия', 'Экзамен по химии Задача организации, в особенности же сложившаяся структура организации влечет за собой процесс внедрения и модернизации новых предложений. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности играет важную роль в формировании направлений прогрессивного развития. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности представляет собой интересный эксперимент проверки форм развития. Значимость этих проблем настолько очевидна, что новая модель организационной деятельности позволяет выполнять важные задания по разработке новых предложений. Не следует, однако забывать, что сложившаяся структура организации требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

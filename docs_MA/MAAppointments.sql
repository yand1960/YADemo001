-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.1.77
-- Время создания: Дек 19 2020 г., 23:42
-- Версия сервера: 5.7.31-34
-- Версия PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: a0445516_movies
-- Адрес хоста: tavanix.ru
-- Пользователь: a0445516_movies
-- Пароль: movies
--

CREATE DATABASE IF NOT EXISTS a0445516_movies;

USE a0445516_movies;

-- --------------------------------------------------------

--
-- Структура таблицы `maAppointments`
--

CREATE TABLE if not exists maAppointments (
  `id` int(11) NOT NULL,
  `user` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `appointmentDate` datetime NOT NULL,
  `maEvent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `maAppointments`
--

INSERT INTO `maAppointments` (`id`, `user`, `appointmentDate`, `maEvent_id`) VALUES
(1, 'Maksim Aisin', '2020-05-01 23:59:59', 1),
(2, '', '2020-10-31 13:00:00', 2),
(3, '', '2020-11-06 11:30:00', 3),
(4, '', '2021-02-12 10:00:00', 4),
(5, '', '2021-04-14 19:30:00', 5),
(6, '', '2021-05-07 05:07:21', 6),
(7, '', '2020-05-02 23:59:59', 1),
(8, '', '2020-11-01 13:00:00', 2),
(9, '', '2020-11-07 11:30:00', 3),
(10, '', '2021-02-13 10:00:00', 4),
(11, '', '2021-04-15 19:30:00', 5),
(12, '', '2021-05-08 05:07:21', 6),
(13, '', '2020-05-03 23:59:59', 1),
(14, '', '2020-11-02 13:00:00', 2),
(15, '', '2020-11-08 11:30:00', 3),
(16, '', '2021-02-14 10:00:00', 4),
(17, '', '2021-04-16 19:30:00', 5),
(18, '', '2021-05-09 05:07:21', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `maEvents`
--

CREATE TABLE IF NOT EXISTS `maEvents` (
  `id` int(11) NOT NULL,
  `eventName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `eventDescription` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `eventImage` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `maEvents`
--

INSERT INTO `maEvents` (`id`, `eventName`, `eventDescription`, `eventImage`) VALUES
(1, 'ЧЕРНАЯ ВДОВА', 'В новом блокбастере MARVEL «Чёрная Вдова» Наташе Романофф предстоит лицом к лицу встретиться со своим прошлым. Чёрной Вдове придется вспомнить о том, что было в её жизни до Мстителей.', 'https://tricolortvmag.ru/upload/2bdd37/%D1%87%D0%B5%D1%80%D0%BD%D0%B0%D1%8F-%D0%B2%D0%B4%D0%BE%D0%B2%D0%B0-w5kafi.png'),
(2, 'СОКОЛ И ЗИМНИЙ СОЛДАТ', 'Следующим в календаре Marvel стоит сериал Сокол и Зимний Солдат, дебют которого состоится на стриминговом сервисе Disney+ осенью 2020 года.', 'https://tricolortvmag.ru/upload/843c03/%D1%81%D0%BE%D0%BA%D0%BE%D0%BB-%D0%B8-%D0%B7%D0%B8%D0%BC%D0%BD%D0%B8%D0%B9-%D1%81%D0%BE%D0%BB%D0%B4%D0%B0%D1%82-mhj5av.png'),
(3, 'ВЕЧНЫЕ', 'Второй кинопремьерой 2020 года станут Вечные – картина о бессмертных суперлюдях, созданных Целестиалами, могучими космическими сущностями, во время их первого визита на Землю.', 'https://tricolortvmag.ru/upload/14a5b8/67334917_10157314311827488_1938253040570073088_o-py7r4f.png'),
(4, 'ШАНГ-ЧИ И ЛЕГЕНДА ДЕСЯТИ КОЛЕЦ', 'Шанг-Чи и легенда десяти колец – ожидаемый фильм Дестина Креттона производства Marvel Studios. Эта картина также войдет в четвертую фазу Кинематографической вселенной MarveI.', 'https://tricolortvmag.ru/upload/e1149d/66282217_652944365174843_6924708964863246479_n-wexym3.png'),
(5, 'ВАНДАВИЖН', 'Еще один мини-сериал отправится на потоковый сервис Disney + весной 2021 года. События шести эпизодов также начнутся сразу после четвертых Мстителей, а в центре событий окажутся герои Элизабет Олсен и Пола Беттани. ', 'https://tricolortvmag.ru/upload/161e43/%D0%B2%D0%B0%D0%BD%D0%B4%D0%B0-%D0%B2%D0%B8%D0%B6%D0%B5%D0%BD-_%D0%B4%D1%80%D1%83%D0%B3%D0%BE%D0%B9-%D0%B2%D0%B0%D1%80%D0%B8%D0%B0%D0%BD%D1%82-7ygatq.png'),
(6, 'ДОКТОР СТРЭНДЖ В МУЛЬТИВСЕЛЕНН', 'Итак, события сиквела Доктора Стрэнджа станут следствием сюжетных перипетий сериала ВандаВижн. \r\nПродолжение истории про Верховного мага Земли мы увидим в конце весны 2021 года. Также присоединится Алая Ведьма.', 'https://tricolortvmag.ru/upload/e18088/%D0%B4%D0%BE%D0%BA%D1%82%D0%BE%D1%80-%D1%81%D1%82%D1%80%D1%8D%D0%BD%D0%B4%D0%B6-27bi3m.png');

--
-- Индексы сохранённых таблиц

COMMIT;
--
-- Индексы таблицы `maAppointments`
--
ALTER TABLE `maAppointments` ADD PRIMARY KEY (`id`);

ALTER TABLE `maAppointments` ADD KEY `maAppointments_fk0` (`maEvent_id`);

--
-- Индексы таблицы `maEvents`
--
ALTER TABLE `maEvents` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `maAppointments`
--
ALTER TABLE `maAppointments` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `maEvents`
--
ALTER TABLE `maEvents` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `maAppointments`
--
ALTER TABLE `maAppointments` ADD CONSTRAINT `maAppointments_fk0` FOREIGN KEY (`maEvent_id`) REFERENCES `maEvents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

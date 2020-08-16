
create database if not exists `dkappointments`;

use dkappointments;

CREATE TABLE `Appointments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`User` VARCHAR(40) charset utf8 NULL,
	`appointmentDate` DATETIME NOT NULL,
	`event_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Events` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`category_id` INT NOT NULL,
	`eventName` VARCHAR(30) charset utf8 NOT NULL,
	`description` VARCHAR(255) charset utf8 NOT NULL,

	PRIMARY KEY (`id`)
);

CREATE TABLE `Categories` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(30) charset utf8 NOT NULL,
	`code` VARCHAR(30) charset utf8 NOT NULL,
	`description` VARCHAR(255) charset utf8 NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Appointments` ADD CONSTRAINT `Appointments_fk0` FOREIGN KEY (`event_id`) REFERENCES `Events`(`id`);

INSERT INTO `events` (`id`, `category_id`, `eventName`, `description`) VALUES
(1, 1,'Экзамен', 'Экзамен по PHP'),
(2, 2,'Прием у участового врача', 'Получить больничный лист'),
(3, 3,'Театр', 'Сходить с подруго в театр');

INSERT INTO `appointments` (`id`, `User`, `appointmentDate`, `event_id`) VALUES
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


insert into dkappointments.categories (name, code, description)
values ('Образование','edu','Востребованные предложения для образования');

insert into dkappointments.categories (name, code, description)
values ('Здоровье','health','Предложения по лечению, улучшению здоровья');

insert into dkappointments.categories (name, code, description)
values ('Досуг','leisure','Предложения для проведения свободного времени');


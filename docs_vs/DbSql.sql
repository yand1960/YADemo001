CREATE SCHEMA `mydbVS` DEFAULT CHARACTER SET utf8 ;
USE `mydbVS`;

CREATE TABLE `vsappointments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`User` VARCHAR(40) NOT NULL,
	`appointmentDate` DATETIME NOT NULL,
	`vsevent_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `vsevents` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`eventName` VARCHAR(30) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `vsappointments` ADD CONSTRAINT `vsappointments_fk0` FOREIGN KEY (`vsevent_id`) REFERENCES `vsevents`(`id`);

# INSERT INTO `vsevents` (`id`, `eventName`, `description`) VALUES
# (1, 'Physics', 'The physics course is designed to be taken only after the successful completion of\r\nthe first course in high school physics.'),
# (2, 'Chemistry', 'The chemistry course is designed to be taken only after the successful completion of\r\nthe first course in high school chemistry.'),
# (3, 'Mechanics', 'The mechanics course is designed to be taken only after the successful completion of\r\nthe first course in high school physics.');

# INSERT INTO `vsappointments` (`id`, `User`, `appointmentDate`, `vsevent_id`) VALUES
# (5, 'Vladimir', '2020-08-12 19:43:30', 1),
# (6, '', '2020-08-13 09:30:00', 1),
# (7, '', '2020-08-13 12:00:00', 3),
# (8, '', '2020-08-13 14:30:00', 3),
# (9, '', '2020-08-13 17:00:00', 1),
# (10, '', '2020-08-14 09:30:00', 3),
# (11, '', '2020-08-14 12:00:00', 2),
# (12, '', '2020-08-14 14:30:00', 1),

CREATE SCHEMA `mydbVS` DEFAULT CHARACTER SET utf8 ;
USE `mydbVS`;

CREATE TABLE `Appointments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`User` VARCHAR(40) NOT NULL,
	`appointmentDate` DATETIME NOT NULL,
	`event_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Events` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`eventName` INT(30) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Appointments` ADD CONSTRAINT `Appointments_fk0` FOREIGN KEY (`event_id`) REFERENCES `Events`(`id`);

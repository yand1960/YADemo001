
create database if not exists dkappointments;

use dkappointments;

CREATE TABLE `Appointments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`User` VARCHAR(40) NOT NULL,
	`appointmentDate` DATETIME NOT NULL,
	`event_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Events` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`category_id` INT NOT NULL,
	`eventName` VARCHAR(30) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Categories` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(30) NOT NULL,
	`code` VARCHAR(30) NOT NULL,
	`description` VARCHAR(255) NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Appointments` ADD CONSTRAINT `Appointments_fk0` FOREIGN KEY (`event_id`) REFERENCES `Events`(`id`);


insert into dkappointments.categories (name, code, description)
values ('Образование','edu','Востребованные предложения для образования');

insert into dkappointments.categories (name, code, description)
values ('Здоровье','health','Предложения по лечению, улучшению здоровья');

insert into dkappointments.categories (name, code, description)
values ('Досуг','leisure','Предложения для проведения свободного времени');


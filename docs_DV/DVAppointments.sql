-- Tables:
--
-- Имя базы данных: 	a0438483_dvproject
-- Адрес хоста: 	derevoxp.ru
-- Пользователь: 	a0438483_dvproject
-- Пароль: 	mama!myla!ramu


create database if not exists dvappointments;

use dvappointments;

create table if not exists groups -- список групп
(
    id serial not null primary key,
    name varchar(40) not null default ''
);

create table if not exists events -- список концертов
 (  id serial not null primary key,
    date datetime not null,
    group_id varchar(40) not null default ''
);

create table if not exists client -- список зрителей
 (  id serial not null primary key,
    login varchar(40) not null default '',
    pass varchar(40) not null default '',
    token varchar(40) not null default ''
);

create table if not exists appointments -- список заказов
 (  id serial not null primary key,
    client_id integer not null,
    event_id varchar(40) not null
);

/////////////////////////////////

insert into events (date, group_id) values
('2011-02-02 04:00:00', 'Doors'),
('2009-03-13 02:00:00', 'Kino'),
('1987-09-01 13:00:00', 'Nirvana'),
('2021-03-10 11:00:00', 'Гражданская оборона'),
('1967-12-12 13:00:00', 'Beatles'),
('1976-10-15 11:00:00', 'Элвис Пресли'),
('2001-09-01 12:00:00', 'Веня Дыркин'),
('2002-04-13 22:00:00', 'Янка Дягилева'),
('2006-02-08 10:00:00', 'Сектор Газа'),
('2017-12-09 14:00:00', 'Поющие трусы'),
('1997-01-21 02:00:00', 'Филипп Киркоров'),
('2019-12-17 22:00:00', 'Король и Шут');

insert into client (login, pass, token) values
('admin', 'admin', 'admin');

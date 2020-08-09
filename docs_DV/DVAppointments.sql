-- Tables:
--
-- Имя базы данных: 	a0438483_dvproject
-- Адрес хоста: 	derevoxp.ru
-- Пользователь: 	a0438483_dvproject
-- Пароль: 	mama!myla!ramu

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
    name varchar(40) not null default ''
);

create table if not exists appointments -- список заказов
 (  id serial not null primary key,
    client_id integer not null,
    event_id varchar(40) not null
);
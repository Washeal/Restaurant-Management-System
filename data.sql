DROP TABLE IF EXISTS users;
create table users(

id int(10) primary key auto_increment,
username varchar(70) not null,
role_id int(70) not null,
password varchar(20) not null,
create_at timestamp 

);
insert into users(username,role_id,password,create_at)values('washeal','1','111',now());


DROP TABLE IF EXISTS roles;
create table roles(
id int(10) primary key auto_increment,
name varchar(70) not null
);


DROP TABLE IF EXISTS employee;
create table employee(
id int(10) primary key auto_increment,
name varchar(70) not null,
depertment_id int(10) not null,
position_id int(10) not null,
salary varchar(100) not null,
date varchar(100) not null
);

DROP TABLE IF EXISTS depertments;
create table depertments(
id int(10) primary key auto_increment,
name varchar(70) not null
);


DROP TABLE IF EXISTS positions;
create table positions(
id int(10) primary key auto_increment,
name varchar(70) not null
);

DROP TABLE IF EXISTS tables;
create table tables(
id int(10) primary key auto_increment,
title varchar(70) not null,
waiter_id int(70) not null,
person varchar(70) not null,
create_at timestamp
);

DROP TABLE IF EXISTS customer;
create table customer(
id int(10) primary key auto_increment,
name varchar(70) not null,
nid varchar(70) not null,
email varchar(20) not null,
mobile varchar(20) not null,
date varchar(20) not null
);

drop table if EXISTS manus;
create table manus(
   id int(10) primary key auto_increment,
   name varchar(100) not null,
   price varchar(10) not null
);



drop table if EXISTS order_details;
create table order_details(
   id int(10) primary key auto_increment,
   invoice_id varchar(10) not null,
   item_id varchar(10) not null,
   qty varchar(10) not null,
   price varchar(10) not null,
   discount varchar(10) not null
);



drop table if EXISTS orders;
create table orders(
   id int(10) primary key auto_increment,
   customer_id int(10) not null,
    mobile varchar(100) not null,
   time varchar(100) not null,
   table_id int(10) not null,
   remark varchar(100) not null
);
 CREATE DATABASE kill_me;
 USE kill_me
 CREATE TABLE user (id int(8) primary key auto_increment, username varchar(32) unique, name varchar(32), password varchar(32), mail varchar(32) unique);
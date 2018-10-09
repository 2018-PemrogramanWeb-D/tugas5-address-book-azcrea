create database tugas5_db;

use crud_db;

CREATE TABLE 'users' (
	'id' int(100) NOT NULL auto_increment,
	'nama' varchar(50), 
	'nrp' varchar(20),
	'email' varchar(100),
	PRIMARY KEY ('id')
);
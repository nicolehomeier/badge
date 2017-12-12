CREATE DATABASE test;

use test;

CREATE TABLE tiptransactions (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	badgecode INT(8),
	tipamt DECIMAL(4,2),
	date TIMESTAMP
);
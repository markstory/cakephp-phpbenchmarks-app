CREATE TABLE articles (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`date` DATE,
	dateTime DATETIME,
	fixedString CHAR(31),
	variableString VARCHAR(255)
);

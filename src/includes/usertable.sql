CREATE TABLE users (
usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
usersName varchar(128) NOT NULL,
usersEmail varchar(128) NOT NULL,
usersUid varchar(128) NOT NULL,
usersPwd varchar(128) NOT NULL
);
CREATE TABLE profile (
id int,
imagePath varchar(128) NOT NULL,
FOREIGN KEY (id) REFERENCES users(id)
);
CREATE TABLE mySports (
id int,
baseball int NOT NULL,
hockey int NOT NULL,
lacrosse int NOT NULL,
ski int NOT NULL,
snowboard int NOT NULL,
soccer int NOT NULL,
FOREIGN KEY (id) REFERENCES users(id)
);

CREATE TABLE measurements(
id int,
height DOUBLE(10,2) NOT NULL,
weight DOUBLE(10,2) NOT NULL,
FOREIGN KEY(id) REFERENCES users(id)
);

CREATE TABLE sports(
id int,
sports varchar(128) NOT NULL,
FOREIGN KEY(id) REFERENCES users(id)
);

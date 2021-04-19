CREATE TABLE users (
id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
username varchar(128) NOT NULL,
password varchar(128) NOT NULL
);
CREATE TABLE profile (
id int AUTO_INCREMENT NOT NULL,
image varchar(200) NOT NULL,
FOREIGN KEY (id) REFERENCES users(id)
);
CREATE TABLE mySports (
id int AUTO_INCREMENT NOT NULL,
baseball int NOT NULL,
hockey int NOT NULL,
lacrosse int NOT NULL,
ski int NOT NULL,
snowboard int NOT NULL,
soccer int NOT NULL,
FOREIGN KEY (id) REFERENCES users(id)
);


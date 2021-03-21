CREATE TABLE users (
usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
usersName varchar(128) NOT NULL,
usersEmail varchar(128) NOT NULL,
usersUid varchar(128) NOT NULL,
usersPwd varchar(128) NOT NULL
);
CREATE TABLE profile (
profileId int,
imagePath varchar(128) NOT NULL,
FOREIGN KEY (profileId) REFERENCES users(id)
);
CREATE TABLE mySports (
mySportsId int,
baseball int NOT NULL,
hockey int NOT NULL,
lacrosse int NOT NULL,
ski int NOT NULL,
snowboard int NOT NULL,
soccer int NOT NULL,
FOREIGN KEY (mySportsId) REFERENCES users(id)
);
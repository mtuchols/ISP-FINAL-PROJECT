DROP DATABASE IF EXISTS login;
CREATE DATABASE login;
USE login;
CREATE TABLE loginInfo
(
   email		VARCHAR(40)			 NOT NULL,
   username     VARCHAR(40) 	     NOT NULL,
   password     VARCHAR(40) 	     NOT NULL,
   PRIMARY KEY(username)
);

INSERT INTO loginInfo VALUES
('user@gmail.com','testUser', '1234');



CREATE DATABASE portfolio;

CREATE TABLE contacts(
    ID INT(11) NOT NULL auto_increment,
    name VARCHAR (64) NOT NULL,
    email VARCHAR (64) NOT NULL,
    subject VARCHAR (64) NOT NULL,
    message text NOT NULL,
    razitko TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    primary key (ID)
)
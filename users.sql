CREATE TABLE IF NOT EXISTS users (
    id INT() NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    course ENUM('it','te','ce','cs'),
    location ENUM('GT','Leg','Ash','AIT','OT'),
    rate ENUM('fi','te','tw','th'),
    PRIMARY KEY('id')
)
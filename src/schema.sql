CREATE TABLE users (
    userId int(11) PRIMARY KEY AUTO_INCREMENT,
    email varchar(30),
    username varchar(20),
    password varchar(20),
    active int(3) DEFAULT 1
)
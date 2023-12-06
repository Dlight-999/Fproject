CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL
);

CREATE TABLE `admins` (
  `admin_id` INT PRIMARY KEY AUTO_INCREMENT,
  `a_uname` VARCHAR(255) NOT NULL UNIQUE,
  `email` VARCHAR(255) NOT NULL,
  `password_hash` VARCHAR(255) NOT NULL
);
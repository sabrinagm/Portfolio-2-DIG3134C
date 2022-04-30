CREATE DATABASE `accounts`;
USE `accounts`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  `phonenumber` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `users` (`id`, `username`, `password`, `phonenumber`) VALUES
(1, 'sabrina', '$2y$10$jhSIk2N5BnkEEzgEBWQDw.AUQIEcrH8V0AcNLfW2nkjTAH2WgAAlW');
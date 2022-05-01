CREATE DATABASE `todolist`;
USE `todolist`;

CREATE TABLE `todolist` (
  `id` int(10) AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'sabrina', '$2y$10$jhSIk2N5BnkEEzgEBWQDw.AUQIEcrH8V0AcNLfW2nkjTAH2WgAAlW');
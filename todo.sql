CREATE DATABASE `todolist`;
USE `todolist`;

CREATE TABLE `todolist` (
  `id` int(10) AUTO_INCREMENT,
  `task` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `todolist` (`id`, `task`) VALUES
(1, 'Finish assignment');
CREATE DATABASE `todo`;
USE `todo`;

CREATE TABLE `tasks` (
  `id` int(10) AUTO_INCREMENT,
  `task` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `todo` (`id`, `task`) VALUES
(1, 'Walk dog');
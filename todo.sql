CREATE DATABASE `todo`;
USE `todo`;

CREATE TABLE `todo` (
  `id` int(11) AUTO_INCREMENT,
  `task` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `todo` (`id`, `task`) VALUES
(1, 'Walk dog');
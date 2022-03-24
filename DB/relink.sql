

CREATE TABLE IF NOT EXISTS `user` (
  `ID` INT(20) NOT NULL AUTO_INCREMENT,
  `name` text(20) NOT NULL,
  `email` longtext NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(30) default 'user',
    PRIMARY KEY (`ID`)
);

INSERT INTO `user` (`name`, `email`, `password`, `position`) VALUES
('Bekalu', 'b@gmail.com', 'ZeAdmin','admin'),
('Abreham', 'a@gmail.com', 'ZeAdmin2','admin2');

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('Bekalu', 'u@gmail.com', '123456'),
('Abreham', 'p@gmail.com', '123456'),
('kirubel', 'kirubelsori55@gmail.com', '123456');



CREATE TABLE IF NOT EXISTS `feedback` (
  `name` text(20) NOT NULL,
  `email` varchar(320) NOT NULL,
  `phone` int(20),
  `message` longtext 
);


INSERT INTO `feedback` (`name`, `email`, `phone`,`message`) VALUES
('Kirubel', 'k@gmail.com', '0912456985','hello ZeBdoor');

CREATE TABLE IF NOT EXISTS `job` (
  `ID` INT(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `file` VARCHAR(50) NOT NULL,
  `deadline` date NOT NULL,
  PRIMARY KEY (`ID`)

);

INSERT INTO `job` (`title`, `qualification`, `deadline`) VALUES
('Programmer', 'BSc in computer science and related fields', '2021-10-09'),
('accountant', 'BSc in accounting', '2021-2-2');



CREATE TABLE IF NOT EXISTS `password_reset_temp` (
  `email` varchar(320) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
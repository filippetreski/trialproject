use multi_login;

CREATE TABLE `students` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `username` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `students` (`id`,`username`, `email`, `name`)
VALUES
	(1,'brookmadison','Brook_Madison@student.com','Brook Madison'),
	(2,'gordonramsey','gordon_ramseyn@student.com','Gordon Ramsey'),
	(3,'kellyklarson','Kelly Klarsson@student.com','Kelly Klarkson'),
	(4,'JohnSmith','johnsmith@student.com','John Smith'),
	(5,'JohnDoe','John Doe@student.com','John Doe'),
	(6,'Samueljackson','samueljackson@student.com','Samuel Jackson');

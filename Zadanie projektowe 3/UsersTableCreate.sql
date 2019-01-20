CREATE TABLE `Users` (
  `idUser` varchar(20) NOT NULL,
  `FistName` varchar(45) NOT NULL,
  `SecondName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `idUser_UNIQUE` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2
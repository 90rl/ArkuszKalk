CREATE TABLE `29320386_1`.`Transaction` (
  `idTransaction` INT NOT NULL AUTO_INCREMENT,
  `UserId` VARCHAR(20) NULL,
  `TransactionTime` DATETIME NULL,
  `TransactionDetail` VARCHAR(45) NULL,
  PRIMARY KEY (`idTransaction`),
  UNIQUE INDEX `idTransaction_UNIQUE` (`idTransaction` ASC));

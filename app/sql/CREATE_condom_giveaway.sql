SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `bybh` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bybh` ;

-- -----------------------------------------------------
-- Table `bybh`.`condom_giveaway`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bybh`.`condom_giveaway` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(45) NULL COMMENT '  \n    ' ,
  `lastname` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `address` VARCHAR(145) NULL ,
  `city` VARCHAR(45) NULL ,
  `state` VARCHAR(45) NULL ,
  `zip` VARCHAR(10) NULL ,
  `school` VARCHAR(65) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `bybh` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

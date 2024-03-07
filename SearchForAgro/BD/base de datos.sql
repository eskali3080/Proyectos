-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bienesraicescrud23
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bienesraicescrud23
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bienesraicescrud23` DEFAULT CHARACTER SET utf8 ;
USE `bienesraicescrud23` ;

-- -----------------------------------------------------
-- Table `bienesraicescrud23`.`propiedades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bienesraicescrud23`.`propiedades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Titulo` VARCHAR(45) NULL,
  `precio` DECIMAL(10,2) NULL,
  `descripcion` LONGTEXT NULL,
  `imagen` VARCHAR(500) NULL,
  `habitaciones` INT(1) NULL,
  `estacionamiento` INT(1) NULL,
  `baños` INT(1) NULL,
  `propiedadescol` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

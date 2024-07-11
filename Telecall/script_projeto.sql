-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projeto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projeto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projeto` DEFAULT CHARACTER SET utf8 ;
USE `projeto` ;

-- -----------------------------------------------------
-- Table `projeto`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto`.`cliente` (
  `idcliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `sexo` VARCHAR(10) NULL DEFAULT NULL,
  `nome_mae` VARCHAR(150) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `tel_cel` VARCHAR(45) NOT NULL,
  `tel_fixo` VARCHAR(45) NULL DEFAULT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `rua` VARCHAR(100) NULL DEFAULT NULL,
  `numero` VARCHAR(10) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_cadastro` VARCHAR(2) NULL DEFAULT NULL,
  `login` VARCHAR(6) NULL DEFAULT NULL,
  `senha` VARCHAR(8) NULL DEFAULT NULL,
  `confirma_senha` VARCHAR(8) NULL DEFAULT NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 69
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projeto`.`log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto`.`log` (
  `idtable1` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(6) NULL DEFAULT NULL,
  `senha` VARCHAR(8) NULL DEFAULT NULL,
  `nome` VARCHAR(80) NULL DEFAULT NULL,
  `pergunta_seguranca` VARCHAR(150) NULL DEFAULT NULL,
  `data` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idtable1`))
ENGINE = InnoDB
AUTO_INCREMENT = 685
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projeto`.`cliente_has_log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto`.`cliente_has_log` (
  `cliente_idcliente` INT(11) NOT NULL,
  `log_idtable1` INT(11) NOT NULL,
  PRIMARY KEY (`cliente_idcliente`, `log_idtable1`),
  INDEX `fk_cliente_has_log_log1_idx` (`log_idtable1` ASC) VISIBLE,
  INDEX `fk_cliente_has_log_cliente_idx` (`cliente_idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_has_log_cliente`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `projeto`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_has_log_log1`
    FOREIGN KEY (`log_idtable1`)
    REFERENCES `projeto`.`log` (`idtable1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

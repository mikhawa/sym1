SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sym1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sym1` ;

-- -----------------------------------------------------
-- Table `sym1`.`droit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sym1`.`droit` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ledroit` INT UNSIGNED NULL,
  `lintitule` VARCHAR(60) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sym1`.`utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sym1`.`utilisateur` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lelogin` VARCHAR(60) NULL,
  `lepass` VARCHAR(60) NULL,
  `lemail` VARCHAR(100) NULL,
  `droit_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `lelogin_UNIQUE` (`lelogin` ASC),
  INDEX `fk_utilisateur_droit_idx` (`droit_id` ASC),
  CONSTRAINT `fk_utilisateur_droit`
    FOREIGN KEY (`droit_id`)
    REFERENCES `sym1`.`droit` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sym1`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sym1`.`article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `letitre` VARCHAR(100) NULL,
  `leslug` VARCHAR(100) NULL,
  `letexte` TEXT NULL,
  `ladate` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `leslug_UNIQUE` (`leslug` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sym1`.`utilisateur_has_article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sym1`.`utilisateur_has_article` (
  `utilisateur_id` INT UNSIGNED NOT NULL,
  `article_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`utilisateur_id`, `article_id`),
  INDEX `fk_utilisateur_has_article_article1_idx` (`article_id` ASC),
  INDEX `fk_utilisateur_has_article_utilisateur1_idx` (`utilisateur_id` ASC),
  CONSTRAINT `fk_utilisateur_has_article_utilisateur1`
    FOREIGN KEY (`utilisateur_id`)
    REFERENCES `sym1`.`utilisateur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateur_has_article_article1`
    FOREIGN KEY (`article_id`)
    REFERENCES `sym1`.`article` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

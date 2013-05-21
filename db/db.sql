SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`User` (
  `id` INT NOT NULL ,
  `firstname` VARCHAR(128) NOT NULL ,
  `lastname` VARCHAR(128) NOT NULL ,
  `username` VARCHAR(128) NOT NULL ,
  `password` VARCHAR(128) NOT NULL COMMENT '8' ,
  `showname` VARCHAR(128) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Group`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Group` (
  `id` INT NOT NULL ,
  `name` VARCHAR(128) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`News`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`News` (
  `id` INT NOT NULL ,
  `User_id` INT NOT NULL ,
  `title` VARCHAR(128) NOT NULL ,
  `abstarct` TEXT NOT NULL ,
  `image` VARCHAR(128) NULL ,
  `datetime` DATETIME NOT NULL ,
  `content` MEDIUMTEXT NULL ,
  `Group_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_News_User` (`User_id` ASC) ,
  INDEX `fk_News_Group1` (`Group_id` ASC) ,
  CONSTRAINT `fk_News_User`
    FOREIGN KEY (`User_id` )
    REFERENCES `mydb`.`User` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_News_Group1`
    FOREIGN KEY (`Group_id` )
    REFERENCES `mydb`.`Group` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Comment` (
  `id` INT NOT NULL ,
  `News_id` INT NOT NULL ,
  `name` VARCHAR(128) NOT NULL ,
  `parrent` INT NULL ,
  `poss` INT NOT NULL ,
  `neg` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Comment_News1` (`News_id` ASC) ,
  INDEX `fk_Comment_Comment1` (`parrent` ASC) ,
  CONSTRAINT `fk_Comment_News1`
    FOREIGN KEY (`News_id` )
    REFERENCES `mydb`.`News` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comment_Comment1`
    FOREIGN KEY (`parrent` )
    REFERENCES `mydb`.`Comment` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User_has_Groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`User_has_Groups` (
  `Group_id` INT NOT NULL ,
  `User_id` INT NOT NULL ,
  PRIMARY KEY (`Group_id`, `User_id`) ,
  INDEX `fk_Group_has_User_User1` (`User_id` ASC) ,
  INDEX `fk_Group_has_User_Group1` (`Group_id` ASC) ,
  CONSTRAINT `fk_Group_has_User_Group1`
    FOREIGN KEY (`Group_id` )
    REFERENCES `mydb`.`Group` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Group_has_User_User1`
    FOREIGN KEY (`User_id` )
    REFERENCES `mydb`.`User` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

CREATE TABLE `workbiche`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `password` VARCHAR(25) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `workbiche`.`workspaces` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(25) NOT NULL ,
  `userid` INT ,
  FOREIGN KEY (`userid`) REFERENCES `users`(`id`) ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `workbiche`.`todo` (
  `workspaceid` INT NOT NULL ,
  `family` VARCHAR(25) NOT NULL ,
  `task` VARCHAR(140) NOT NULL ,
  `priority` INT NOT NULL ,
  `time` INT NOT NULL ,
  `id` INT NOT NULL AUTO_INCREMENT ,
  FOREIGN KEY (`workspaceid`) REFERENCES `workspaces`(`id`) ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

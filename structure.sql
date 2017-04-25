drop table if exists t_odo;

CREATE TABLE `workbiche`.`t_odo` (

`todo_id` INT NOT NULL AUTO_INCREMENT ,
`todo_name` VARCHAR(140) NOT NULL ,
`todo_priority` INT NOT NULL ,
`todo_time` INT NOT NULL ,
`todo_family` VARCHAR(140) NOT NULL ,
PRIMARY KEY (`todo_id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

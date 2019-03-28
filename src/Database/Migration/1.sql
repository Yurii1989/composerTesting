CREATE DATABASE parkSlot;
use parkSlot;

CREATE TABLE parkPlace(
  id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  type varchar(255) NOT NULL DEFAULT 'normal',
  number varchar(10) NOT NULL,
  occupied BOOL DEFAULT FALSE
) ENGINE InnoDB;

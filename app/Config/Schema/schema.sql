

DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`projects`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`companies`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`categories`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`reviewers`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`experts`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`personas`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`locations`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`emails`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`receivers`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`addresses`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`items`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`orders`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`sales`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`shipping_types`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`shippings`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`statuses`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`sub_categories`;
DROP TABLE IF EXISTS `cdb_2d85ad6af6`.`uploads`;


CREATE TABLE `cdb_2d85ad6af6`.`projects` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`company_id` int(11) NOT NULL,
	`category_id` int(11) NOT NULL,
	`name_build` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`name_line` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`requester` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`department` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`reviewer_id` int(11) NOT NULL,
	`expert_id` int(11) NOT NULL,
	`persona_id` int(11) NOT NULL,
	`location_id` int(11) NOT NULL,
	`audience` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`messages` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`comments` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`milestone` datetime NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`companies` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`reviewers` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`experts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`personas` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`locations` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`emails` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`project_id` int(11) NOT NULL,
	`name_line` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`deploy` datetime NOT NULL,
	`purpose` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`cta` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`pain_points` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`signature` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`reviewer_id` int(11) NOT NULL,
	`expert_id` int(11) NOT NULL,
	`email_sender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`receiver_id` int(11) NOT NULL,
	`location_id` int(11) NOT NULL,
	`comments` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`requirements` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`receivers` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`addresses` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name_line` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`street` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`street2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`city` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`state` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`zipcode` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`country` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'USA',
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`items` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`category_id` int(11) NOT NULL,
	`sub_category_id` int(11) NOT NULL,
	`status_id` int(11) NOT NULL,
	`item_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`price_dollars` float DEFAULT 0 NOT NULL,
	`cost_dollars` float DEFAULT 0 NOT NULL,
	`qty` int(11) DEFAULT 1 NOT NULL,
	`shipping_price_dollars` float DEFAULT 0 NOT NULL,
	`short_description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`cart_count` int(11) DEFAULT 0 NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`),
	UNIQUE KEY `item_number` (`item_number`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`orders` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` int(11) NOT NULL,
	`first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`billing_address_id` int(11) NOT NULL,
	`shipping_address_id` int(11) NOT NULL,
	`CC_number` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`CC_code` int(5) DEFAULT NULL,
	`CC_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`CC_exp_month` int(2) NOT NULL,
	`CC_exp_year` int(4) NOT NULL,
	`phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`phone2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`isnew` tinyint(1) DEFAULT '1' NOT NULL,
	`special_request` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`shipping_price_dollars` float NOT NULL,
	`shipping_id` int(11) NOT NULL,
	`discount_dollars` float NOT NULL,
	`tax_dollars` float NOT NULL,
	`total_dollars` float NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`sales` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL,
	`order_id` int(11) NOT NULL,
	`tracking_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`shipping_date` date DEFAULT NULL,
	`shipping_type_id` int(11) NOT NULL,
	`description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`price_dollars` float NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`shipping_types` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`shippings` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`price_dollars` float NOT NULL,
	`is_active` tinyint(1) DEFAULT '1' NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`statuses` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`sub_categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`category_id` int(11) NOT NULL,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `cdb_2d85ad6af6`.`uploads` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL,
	`name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`size` int(11) NOT NULL,
	`type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;


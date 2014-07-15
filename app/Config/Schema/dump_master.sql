-- PROS URL BUILDER

-- OPTION 0 - Table structure for table `sources` --
DROP TABLE IF EXISTS `sources`;
CREATE TABLE `sources` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
	  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `sources` WRITE;
UNLOCK TABLES;


-- OPTION 1 - Table structure for table `mediums` --
DROP TABLE IF EXISTS `medias`;
CREATE TABLE `medias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
	  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `medias` WRITE;
UNLOCK TABLES;

-- OPTION 2 - Table structure for table `campaing types` --
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
	  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `types` WRITE;
UNLOCK TABLES;



-- Table structure for URLS --
DROP TABLE IF EXISTS `urls`;
CREATE TABLE `urls` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `base` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `source_id` int(10) DEFAULT NULL,
  `media_id` int(10) DEFAULT NULL,
  `type_id` int(10) DEFAULT NULL,
  `build` text,
  `bit` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `urls` WRITE;
UNLOCK TABLES;

-- Table structure for email BLASTS --
DROP TABLE IF EXISTS `blasts`;
CREATE TABLE `blasts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
	
  `base` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,

  `build` varchar(255) DEFAULT NULL,	
  `build_twitter` varchar(255) DEFAULT NULL,
  `build_linkedin` varchar(255) DEFAULT NULL,
  `build_eu_twitter` varchar(255) DEFAULT NULL,
  `build_eu_linkedin` varchar(255) DEFAULT NULL,
  `build_google` varchar(255) DEFAULT NULL,
  `build_facebook` varchar(255) DEFAULT NULL,
  `build_group_linkedin` varchar(255) DEFAULT NULL,

	
  `description` text,
	
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
LOCK TABLES `blasts` WRITE;
UNLOCK TABLES;



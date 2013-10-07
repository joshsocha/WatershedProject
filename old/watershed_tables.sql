USE watershed;

CREATE TABLE IF NOT EXISTS `health_observations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `observation_date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `anonymous` bit(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
);
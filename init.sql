CREATE DATABASE IF NOT EXISTS hackernews;

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(18) DEFAULT NULL,
  `content` text,
  `rating` int(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

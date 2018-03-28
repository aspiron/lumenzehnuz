# lumenzehnuz
Lumen Mikro-Framework yordamida qilingan loyiha.
```
DROP TABLE IF EXISTS `hikoyas`;
CREATE TABLE `hikoyas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hsh_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votes` bigint(20) NOT NULL,
  `date` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `confirmed` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `hikoyas` (`id`, `hsh_id`, `title`, `text`, `author`, `votes`, `date`, `confirmed`) VALUES
(1,	1,	'sadfdg',	'asdasdasdas',	'asd',	1,	'2018-03-28 14:42:21',	'false');


DROP TABLE IF EXISTS `sharts`;
CREATE TABLE `sharts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

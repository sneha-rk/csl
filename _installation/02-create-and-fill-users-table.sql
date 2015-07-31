CREATE TABLE IF NOT EXISTS `CSL`.`users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

CREATE TABLE IF NOT EXISTS `CSL`.`books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_id` int(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'owner uid',
  `book_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci,
  `available` tinyint(1) NOT NULL DEFAULT 1, 
  PRIMARY KEY (`book_id`),
  FOREIGN KEY (`user_id`) references `users`(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='book data';

CREATE TABLE IF NOT EXISTS `CSL`.`requests` (
	`req_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
	`book_id` int(11) NOT NULL,
	`owner_id` int(11) NOT NULL references `users`(`user_id`),
	`user_id` int(11) NOT NULL references `users`(`user_id`),
	`req_time` TIMESTAMP NOT NULL,
	`seen` tinyint(1) NOT NULL DEFAULT 0,
	`accepted` tinyint(1) NOT NULL DEFAULT 0,
	`accept_time` TIMESTAMP NOT NULL,
	PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='request data';

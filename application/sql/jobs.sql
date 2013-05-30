CREATE TABLE `jobs` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `job_title` character varying(100) NOT NULL,
    `keywords` varchar(255),
    `description` text,
 `date_created` int(20),
 `closing_date` int(20),
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;
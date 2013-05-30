CREATE TABLE `applicants` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` character varying(100) NOT NULL,
    `cv_attached` varchar(10),
    `email` character varying(120) NOT NULL,   `job_id` BIGINT UNSIGNED,
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;
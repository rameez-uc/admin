-- Table structure for table `tbl_site_map_file`
CREATE TABLE IF NOT EXISTS `tbl_sitemap_file`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `sitemap_url_path` VARCHAR(500) NOT NULL,
    `sitemap_data` MEDIUMTEXT DEFAULT NULL,
    `created_date` DATETIME NOT NULL,
    `last_modified_date` DATETIME NOT NULL,
    `url_counter` INT UNSIGNED DEFAULT 0,
    `is_sitemap_index` TINYINT(1) NOT NULL DEFAULT  '0',
    `parent_id` INT UNSIGNED DEFAULT NULL,
    `submit_to_se` TINYINT(1) NOT NULL DEFAULT '0',
    `is_locked` TINYINT(1) NOT NULL DEFAULT '0',
    `regenerate` TINYINT(1) NOT NULL DEFAULT '0',
    `lock_datetime` DATETIME DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY(`id`),
    UNIQUE KEY `sitemap_file_uk`(`sitemap_url_path`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- tbl_page_url structure

CREATE TABLE IF NOT EXISTS `tbl_page_url`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `tbl_sitemap_file_id` INT UNSIGNED DEFAULT NULL,
    `url` VARCHAR(500) NOT NULL,
    `canonical_url` VARCHAR(500) NOT NULL,
    `meta_title` VARCHAR(255) NOT NULL,
    `meta_description` VARCHAR(500) NOT NULL,
    `meta_keywords` VARCHAR(500) NOT NULL,
    `sitemap_include` TINYINT(1) NOT NULL,
    `sitemap_priority` DECIMAL(2,1) DEFAULT NULL,
    `sitemap_changefreq` ENUM('always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never') DEFAULT NULL,
    `sitemap_last_updated_date` DATETIME NOT NULL,
    `no_follow` TINYINT(1) NOT NULL,
    `no_index` TINYINT(1) NOT NULL,
    `created_date` DATETIME NOT NULL,
    `last_modified_date` DATETIME NOT NULL,    
    PRIMARY KEY(`id`),
    UNIQUE KEY `sitemap_url_uk`(`url`),
    FOREIGN KEY (`tbl_sitemap_file_id`) references `tbl_sitemap_file` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

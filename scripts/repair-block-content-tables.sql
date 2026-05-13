-- Repair missing Drupal core block_content entity tables (MySQL 8 / MariaDB).
-- Use when block_content module is enabled but tables were never created or were dropped.
-- Run from project root: ddev mysql db < scripts/repair-block-content-tables.sql
-- Then: ddev drush cache:rebuild

SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `block_content` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `revision_id` int unsigned DEFAULT NULL,
  `type` varchar(32) CHARACTER SET ascii NOT NULL COMMENT 'The ID of the target entity.',
  `uuid` varchar(128) NOT NULL,
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `block_content__revision_id` (`revision_id`),
  UNIQUE KEY `block_content_field__uuid__value` (`uuid`),
  KEY `block_content_field__type__target_id` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
COMMENT='The base table for block_content entities.';

CREATE TABLE IF NOT EXISTS `block_content_revision` (
  `id` int unsigned NOT NULL,
  `revision_id` int unsigned NOT NULL AUTO_INCREMENT,
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL,
  `revision_user` int unsigned DEFAULT NULL,
  `revision_created` int DEFAULT NULL,
  `revision_log` longblob,
  `revision_default` tinyint DEFAULT NULL,
  PRIMARY KEY (`revision_id`),
  KEY `block_content__id` (`id`),
  KEY `block_content_field__revision_user__target_id` (`revision_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
COMMENT='The revision table for block_content entities.';

CREATE TABLE IF NOT EXISTS `block_content_field_data` (
  `id` int unsigned NOT NULL,
  `revision_id` int unsigned NOT NULL,
  `type` varchar(32) CHARACTER SET ascii NOT NULL COMMENT 'The ID of the target entity.',
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL,
  `status` tinyint NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `changed` int DEFAULT NULL,
  `reusable` tinyint DEFAULT NULL,
  `default_langcode` tinyint NOT NULL,
  `revision_translation_affected` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`, `langcode`),
  KEY `block_content__id__default_langcode__langcode` (`id`, `default_langcode`, `langcode`),
  KEY `block_content__revision_id` (`revision_id`),
  KEY `block_content_field__type__target_id` (`type`),
  KEY `block_content_field__reusable` (`reusable`),
  KEY `block_content__status_type` (`status`, `type`, `id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
COMMENT='The data table for block_content entities.';

CREATE TABLE IF NOT EXISTS `block_content_field_revision` (
  `id` int unsigned NOT NULL,
  `revision_id` int unsigned NOT NULL,
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL,
  `status` tinyint NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `changed` int DEFAULT NULL,
  `default_langcode` tinyint NOT NULL,
  `revision_translation_affected` tinyint DEFAULT NULL,
  PRIMARY KEY (`revision_id`, `langcode`),
  KEY `block_content__id__default_langcode__langcode` (`id`, `default_langcode`, `langcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
COMMENT='The revision-field data table for block_content entities.';

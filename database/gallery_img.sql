-- GalaxyParking Gallery Images Table Schema
-- Compatible with existing Category_model.php, Category.php
-- Database: galaxyparking (MySQL/MariaDB)
-- Run: mysql -u root galaxyparking < database/gallery_img.sql

DROP TABLE IF EXISTS `gallery_img`;

CREATE TABLE `gallery_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL COMMENT 'FK to category.id',
  `title` varchar(255) NOT NULL DEFAULT 'Gallery Images' COMMENT 'Title for image group',
  `images` JSON NOT NULL COMMENT 'JSON array of filenames e.g. [\"img1.jpg\", \"img2.webp\"]',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Upload timestamp',
  PRIMARY KEY (`id`),
  KEY `idx_category_status` (`category_id`,`status`),
  KEY `idx_created_at` (`created_at`),
  CONSTRAINT `fk_gallery_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Gallery image groups with multiple images per category';

-- Sample data (ensure categories exist first)
-- INSERT INTO `gallery_img` (`category_id`, `title`, `images`) VALUES
-- (1, 'Exterior Views', '[\"sample1.jpg\", \"sample2.jpg\"]'),
-- (1, 'Interior Parking', '[\"parking1.webp\", \"parking2.png\"]');

-- Verify:
-- SELECT * FROM gallery_img WHERE status = 1 ORDER BY created_at DESC;


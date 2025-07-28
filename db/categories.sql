/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : db_sdasachio

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 24/07/2025 09:05:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `categories_parent_id_foreign`(`parent_id` ASC) USING BTREE,
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Pneumatic cylinders', NULL, 'Pneumatic cylinders are used for various automation systems.', NULL, '2025-07-14 04:23:18', '2025-07-14 04:23:18');
INSERT INTO `categories` VALUES (2, 'Air Soruce Treatment Units', NULL, 'Units for treating compressed air before it is used in systems.', NULL, '2025-07-14 04:23:18', '2025-07-14 04:23:18');
INSERT INTO `categories` VALUES (3, 'Directional valves', NULL, 'Valves that control the direction of air flow.', NULL, '2025-07-14 04:23:18', '2025-07-14 04:23:18');
INSERT INTO `categories` VALUES (4, 'Fluid Solenoid Valve', NULL, 'Solenoid valves for controlling fluid flow using electric signals.', NULL, '2025-07-14 04:23:18', '2025-07-14 04:23:18');
INSERT INTO `categories` VALUES (5, 'Pneumatic Accessories', NULL, 'Additional pneumatic system components and tools.', NULL, '2025-07-14 04:23:18', '2025-07-14 04:23:18');

SET FOREIGN_KEY_CHECKS = 1;

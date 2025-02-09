/*
 Navicat Premium Dump SQL

 Source Server         : my local
 Source Server Type    : MySQL
 Source Server Version : 80404 (8.4.4)
 Source Host           : localhost:3306
 Source Schema         : internetku

 Target Server Type    : MySQL
 Target Server Version : 80404 (8.4.4)
 File Encoding         : 65001

 Date: 07/02/2025 03:07:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for registrations
-- ----------------------------
DROP TABLE IF EXISTS `registrations`;
CREATE TABLE `registrations` (
  `registration_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `address` text NOT NULL,
  `package_id` int NOT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`registration_id`),
  KEY `user_id` (`user_id`),
  KEY `package_id` (`package_id`),
  CONSTRAINT `registrations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `registrations_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `subscription_packages` (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of registrations
-- ----------------------------
BEGIN;
INSERT INTO `registrations` (`registration_id`, `user_id`, `address`, `package_id`, `registration_date`, `full_name`) VALUES (1, 1, 'test', 1, '2025-02-07 02:56:35', 'admin');
INSERT INTO `registrations` (`registration_id`, `user_id`, `address`, `package_id`, `registration_date`, `full_name`) VALUES (2, 2, 'asdasd', 2, '2025-02-07 03:07:01', NULL);
COMMIT;

-- ----------------------------
-- Table structure for subscription_packages
-- ----------------------------
DROP TABLE IF EXISTS `subscription_packages`;
CREATE TABLE `subscription_packages` (
  `package_id` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `billing_cycle` enum('monthly','yearly') DEFAULT 'monthly',
  `speed` varchar(20) DEFAULT NULL,
  `support_type` varchar(50) DEFAULT NULL,
  `mobile_app_available` tinyint(1) DEFAULT '1',
  `max_connections` int DEFAULT NULL,
  `features` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of subscription_packages
-- ----------------------------
BEGIN;
INSERT INTO `subscription_packages` (`package_id`, `package_name`, `price`, `billing_cycle`, `speed`, `support_type`, `mobile_app_available`, `max_connections`, `features`, `created_at`) VALUES (1, 'Basic', 99000.00, 'monthly', '20Mbps', 'Normal Support', 1, 20, 'All analytic features', '2025-02-07 02:09:29');
INSERT INTO `subscription_packages` (`package_id`, `package_name`, `price`, `billing_cycle`, `speed`, `support_type`, `mobile_app_available`, `max_connections`, `features`, `created_at`) VALUES (2, 'Premium', 199000.00, 'monthly', '50Mbps', 'Priority Support', 1, 50, 'Advanced analytics, Priority customer service', '2025-02-07 02:09:29');
INSERT INTO `subscription_packages` (`package_id`, `package_name`, `price`, `billing_cycle`, `speed`, `support_type`, `mobile_app_available`, `max_connections`, `features`, `created_at`) VALUES (3, 'Enterprise', 299000.00, 'monthly', '100Mbps', '24/7 Dedicated Support', 1, 100, 'Full suite analytics, Dedicated support team', '2025-02-07 02:09:29');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `phone_number`, `created_at`) VALUES (1, 'admin', '$2b$10$E4RLGOSRWpRr15PAIR1E.unbuPGnqFKPPFtGtyqcgwQIdZ9OgYRSC', 'admin@admin.com', '081231231', '2025-02-07 01:39:13');
INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `phone_number`, `created_at`) VALUES (2, 'test', '$2b$10$LjoCFx75ep7wOZrfLMoKSO3jI9I2cwVDZL8434joWS/fzXeS3ZW22', 'test@test.com', '978654', '2025-02-07 03:07:01');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

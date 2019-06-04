/*
Navicat MySQL Data Transfer

Source Server         : localhost2018
Source Server Version : 100136
Source Host           : localhost:3306
Source Database       : sial

Target Server Type    : MYSQL
Target Server Version : 100136
File Encoding         : 65001

Date: 2019-06-03 19:30:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interior` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_revision` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_credito` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

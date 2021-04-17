/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : konecta

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 17/04/2021 12:11:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for facturacion
-- ----------------------------
DROP TABLE IF EXISTS `facturacion`;
CREATE TABLE `facturacion`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(18) NULL DEFAULT NULL,
  `cantidad` int(18) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of facturacion
-- ----------------------------
INSERT INTO `facturacion` VALUES (1, 14, 50);

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `referencia` int(18) NULL DEFAULT NULL,
  `precio` int(18) NULL DEFAULT NULL,
  `peso` int(18) NULL DEFAULT NULL,
  `categoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `stock` int(18) UNSIGNED NULL DEFAULT NULL,
  `fecha_creacion` date NULL DEFAULT NULL,
  `fecha_ultima_venta` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (12, 'CELULAR', 54545, 560000, 30, 'MOVIL', 290, '2021-04-17', '2021-04-17 11:36:28');
INSERT INTO `productos` VALUES (14, 'LAPICERO', 78454, 1000, 10, 'LAPIZ', 400, '2021-04-17', '2021-04-17 12:10:55');
INSERT INTO `productos` VALUES (15, 'RESMA', 78944, 10000, 12, 'HOJAS', 50, '2021-04-17', '2021-04-17 11:52:58');
INSERT INTO `productos` VALUES (16, 'CONTROLES', 154545, 15000, 10, 'CONTROL', 0, '2021-04-17', '0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;

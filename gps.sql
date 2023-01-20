/*
Navicat MariaDB Data Transfer

Source Server         : mariadb
Source Server Version : 100427
Source Host           : localhost:3306
Source Database       : gps

Target Server Type    : MariaDB
Target Server Version : 100427
File Encoding         : 65001

Date: 2023-01-17 16:57:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ciudad
-- ----------------------------
DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `idCiudad` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idCiudad`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of ciudad
-- ----------------------------
INSERT INTO `ciudad` VALUES ('1', 'La paz');
INSERT INTO `ciudad` VALUES ('2', 'santa cruz');
INSERT INTO `ciudad` VALUES ('3', 'cochabamba');
INSERT INTO `ciudad` VALUES ('4', 'oruro');
INSERT INTO `ciudad` VALUES ('5', 'tarija');
INSERT INTO `ciudad` VALUES ('6', 'beni');
INSERT INTO `ciudad` VALUES ('7', 'pando');
INSERT INTO `ciudad` VALUES ('8', 'chuquisaca');
INSERT INTO `ciudad` VALUES ('9', 'potosi');
INSERT INTO `ciudad` VALUES ('15', 'Buenos Aires ARGENTINA');

-- ----------------------------
-- Table structure for pais
-- ----------------------------
DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idPais`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of pais
-- ----------------------------
INSERT INTO `pais` VALUES ('1', 'BOLIVIA');
INSERT INTO `pais` VALUES ('8', 'ARGENTINA');

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES ('1', 'Adminitrador');
INSERT INTO `rol` VALUES ('2', 'Usuario');
INSERT INTO `rol` VALUES ('3', 'Sin Privilegios');

-- ----------------------------
-- Table structure for tipousuario
-- ----------------------------
DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of tipousuario
-- ----------------------------
INSERT INTO `tipousuario` VALUES ('1', 'Admin');
INSERT INTO `tipousuario` VALUES ('2', 'Vendedores');
INSERT INTO `tipousuario` VALUES ('3', 'Cliente');
INSERT INTO `tipousuario` VALUES ('4', 'Proveedor');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoUsuario` int(10) DEFAULT NULL,
  `rolUsuario` int(10) DEFAULT NULL,
  `idPais` int(10) DEFAULT NULL,
  `idCiudad` int(10) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT '',
  `login` varchar(100) DEFAULT '',
  `direccion` varchar(100) DEFAULT '',
  `telefono` int(11) DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `clave` varchar(30) DEFAULT '',
  `correo` varchar(30) DEFAULT '',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('93', '1', '1', '1', '1', 'Ariel Savedra Ontiveros', 'asabedra', 'calle cuarto centenario #6754 av. del policia', '67543212', '1', 'abdghs', 'prueba@hotmail.com');
INSERT INTO `usuarios` VALUES ('97', '1', '1', '1', '1', 'jose antonio vaca dies', 'jvaca', 'av. cornejo mamani', '54326789', '1', 'jvaca', 'prueba@hotmail.com');
INSERT INTO `usuarios` VALUES ('98', '4', '3', '1', '7', 'daniel gonzales gamarra', 'dgonzales', 'calle montesinos av. las americas #2032', '87960453', '1', 'xxx', 'prueba@hotmail.com');
INSERT INTO `usuarios` VALUES ('99', '4', '2', '1', '8', 'Ariel lopez padilla', 'mjuan', 'calle Santa cruz av. iilampu #45', '3214567', '1', '23123', 'prueba@hotmail.com');

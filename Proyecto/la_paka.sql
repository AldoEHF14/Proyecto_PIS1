/*
 Navicat Premium Data Transfer

 Source Server         : My_Sql
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : la_paka

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 21/05/2022 17:58:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for administrador
-- ----------------------------
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador`  (
  `ID_Administrador` int NOT NULL AUTO_INCREMENT,
  `ID_Cuenta` int NOT NULL,
  `Nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Fecha_Nacimiento` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Numero_Telefonico` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Codigo_Administrador` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID_Administrador`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of administrador
-- ----------------------------
INSERT INTO `administrador` VALUES (0, 0, '', NULL, NULL, NULL);
INSERT INTO `administrador` VALUES (17, 71, 'sdfsfg', '2022-05-23', '5571910624', 'nspcduq15b');
INSERT INTO `administrador` VALUES (16, 70, 'Natalia', '2022-05-04', '5571910624', '6veuqksm8l');
INSERT INTO `administrador` VALUES (15, 69, 'Natalia', '2022-05-04', '5571910624', '736qdhoug2');
INSERT INTO `administrador` VALUES (12, 64, 'pepeerer', '2022-05-02', '435345', 'hrdx4peatu');
INSERT INTO `administrador` VALUES (13, 67, 'sdf', '0324-04-02', 'sdf', 'lcyhgp0e5s');
INSERT INTO `administrador` VALUES (14, 68, 'Natalia', '2015-06-20', '5571910624', '6jth2saml0');

-- ----------------------------
-- Table structure for articulo
-- ----------------------------
DROP TABLE IF EXISTS `articulo`;
CREATE TABLE `articulo`  (
  `ID_Articulo` int NOT NULL AUTO_INCREMENT,
  `Nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Marca` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Talla` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Precio` float NULL DEFAULT NULL,
  `Linea` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Existencia` int NULL DEFAULT NULL,
  `Imagen` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID_Articulo`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articulo
-- ----------------------------
INSERT INTO `articulo` VALUES (1, 'Camisa', 'Von', '14', 400, 'invierno', 50, 'IMG-20211017-WA0013.jpeg');
INSERT INTO `articulo` VALUES (2, 'Pantalón', 'Avon', '16', 300, 'N/A', 40, 'IMG-20211017-WA0015.jpeg');
INSERT INTO `articulo` VALUES (4, 'Camisa Morada', 'Chafa', '232', 12.4, 'N/E', 23, 'Camisa Morada.png');
INSERT INTO `articulo` VALUES (5, 'Gorra blanca', 'Nike', '7', 100, 'Verano', 20, 'Gorra blanca.png');
INSERT INTO `articulo` VALUES (6, 'Pantalón adidas Tiro Essential', 'Adidas ', '3', 200, 'Invierno', 10, 'Pantalón adidas Tiro Essential.png');
INSERT INTO `articulo` VALUES (7, 'Sudadera Blanca ', 'Pull and Bear', '15', 350, 'Invierno ', 25, 'Sudadera Blanca .png');
INSERT INTO `articulo` VALUES (17, 'Sudadera negra ', 'ADIDAS', '20', 200, 'Deportes', 2, 'Sudadera negra .png');
INSERT INTO `articulo` VALUES (9, 'Pantalón hombre', 'Cuidado con el Perro', '28', 150, 'Otoño', 15, 'Pantalón hombre.png');
INSERT INTO `articulo` VALUES (10, 'Nike Court Vision Blancos', 'Nike ', '26', 450, 'Otoño', 16, 'Nike Court Vision Blancos.png');
INSERT INTO `articulo` VALUES (11, 'Jeans para mujer', 'Levis', '11', 400, 'Verano', 5, 'Jeans para mujer.png');
INSERT INTO `articulo` VALUES (12, 'Playera Rosa Mujer', 'Nautica ', '10', 100, 'Verano', 30, 'Playera Rosa Mujer.png');
INSERT INTO `articulo` VALUES (13, 'Playera Tipo Polo Hombre', 'Nautica', '12', 150, 'Verano', 12, 'Playera Tipo Polo Hombre.png');
INSERT INTO `articulo` VALUES (14, 'Nike Superfly', 'Nike', '25.5', 200, 'Invierno', 20, 'Nike Superfly.png');
INSERT INTO `articulo` VALUES (18, 'Playera naranja ', 'ADIDAS', '20', 200, 'Deportes', 10, 'Playera naranja .png');

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente`  (
  `ID_Ciente` int NOT NULL AUTO_INCREMENT,
  `ID_Cuenta` int NULL DEFAULT NULL,
  `Nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Fecha_Nacimiento` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `Numero_Telefonico` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID_Ciente`) USING BTREE,
  INDEX `ID_Cuenta`(`ID_Cuenta`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES (17, 63, 'pepe', '2022-05-17', '34435345');
INSERT INTO `cliente` VALUES (16, 61, 'Antonio', '32323-02-23', '232323');

-- ----------------------------
-- Table structure for cuenta
-- ----------------------------
DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE `cuenta`  (
  `ID_Cuenta` int NOT NULL AUTO_INCREMENT,
  `Correo` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contrasenia` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Imagen` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID_Cuenta`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 72 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'Tabla que almacena los correos y contraseñas de los usuarios' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cuenta
-- ----------------------------
INSERT INTO `cuenta` VALUES (0, '', '', '');
INSERT INTO `cuenta` VALUES (71, '1223@gmail.com', '$2y$10$Z9TtbY7bQ/60CBgdmcS8AORA7.XRFvQ6o/rzckzCAVbMB8t8obC.i', '');
INSERT INTO `cuenta` VALUES (70, '2193034858@uam.cua.mx', '$2y$10$ehSJlyBaXiUW30UQpTdxOuthWsx.sRzLlZV1OWCBZT55T0RTQN4cm', '');
INSERT INTO `cuenta` VALUES (69, 'nataliavictoria317@aragon.unam.mx', '$2y$10$vtrxWx6DijyOvpX8ExX/v.kLdwZLGObkuC.tlUvTsKqg97m/kBCxi', '');
INSERT INTO `cuenta` VALUES (68, 'Natdivergente@gmail.com', '$2y$10$OvLxluKSiCI/Y/MaHhv1Ou.26q1jMZ2OFKXJCGVCab//r3YyLOPsW', '');
INSERT INTO `cuenta` VALUES (67, 'as@dsf', '$2y$10$hkMiSwQthrh2HBrWmHu4EuQbU.wuXby/O7fHSWNqLbIWoqn46DzT2', '');
INSERT INTO `cuenta` VALUES (66, 'root@root', '$2y$10$mx0O8YpuqIDhkDBdK8kZq.O/oSdZ9AuNTbMfuUAfp8AQoWihz8eqC', 'root.png');
INSERT INTO `cuenta` VALUES (65, 'pepe@gmail.com', '$2y$10$2bkDOTgB9MLmhdr50Dx7j.nlqaJ/19rq/oKTNlz2H/fwNCzBzbBsO', 'Antonio.png');
INSERT INTO `cuenta` VALUES (64, 'Administrador5@gmail.com', '$2y$10$0/qqG5dRY8Iry/HUpJmReeTZX3diS8HPvtrUheGYxeuiJdmE5pxXi', '');
INSERT INTO `cuenta` VALUES (63, 'Administrador3@gmail.com', '$2y$10$HSOXWFPL1Q4cCq6IHAR0xegfLXs.MwoUnrj/YJZzd7dXxQ.0KYZKq', 'pepe.png');
INSERT INTO `cuenta` VALUES (62, 'Proveedor2@gmail.com', '$2y$10$TxtpHA0rJXJqglnerOBlB.uXVuZEWWXKZXd0VHqDgEmwaIfm.gHN6', '45435.png');
INSERT INTO `cuenta` VALUES (61, 'Proveedor1@gmail.com', '$2y$10$.xfTQBLteYBhPOAwfvmbmOc7oDgDovXaQcUd5cfKS08Qduf02YBua', 'Antonio.png');
INSERT INTO `cuenta` VALUES (60, 'Proveedor@gmail.com', '$2y$10$4lDg3iyAlNefeQhaPo2kkuu7ctXGi6ALMyPGk5WShsCr2h56ziBR6', '45435.png');

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor`  (
  `ID_Proveedor` int NOT NULL AUTO_INCREMENT,
  `ID_Cuenta` int NOT NULL,
  `Nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Fecha_Nacimiento` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Numero_Telefonico` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Empresa` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Codigo_Proveedor` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID_Proveedor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proveedor
-- ----------------------------
INSERT INTO `proveedor` VALUES (0, 0, '', '', '', '', '');
INSERT INTO `proveedor` VALUES (13, 60, '45435', '23232-03-31', '234234', '4234234', 'o8ta5');
INSERT INTO `proveedor` VALUES (14, 62, '45435', '0034-04-25', '343434', '343434', 'ldhm4');
INSERT INTO `proveedor` VALUES (15, 65, 'Antonio', '', '23344', '32432432432', 'vn9px');
INSERT INTO `proveedor` VALUES (16, 66, 'root', '0345-05-04', '345345', '4324324324', 'b1yf3');

SET FOREIGN_KEY_CHECKS = 1;

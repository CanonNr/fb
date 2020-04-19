/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : five_buy

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 19/04/2020 21:15:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_default` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES (1, 1, '周杰伦', '15812345678', '福建省-龙岩市-漳平市 凤起路42号小太阳幼儿园', 'true', '2020-04-19 13:04:02', '2020-04-19 13:04:02');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL);

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES (8, 1, 3, '2020-04-19 13:13:46', '2020-04-19 13:13:46');

-- ----------------------------
-- Table structure for collects
-- ----------------------------
DROP TABLE IF EXISTS `collects`;
CREATE TABLE `collects`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `status` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '0未收藏,1已收藏',
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of collects
-- ----------------------------
INSERT INTO `collects` VALUES (1, 1, 19, 'true', '2020-04-19 13:03:03', '2020-04-19 13:03:03');
INSERT INTO `collects` VALUES (2, 1, 21, 'true', '2020-04-19 13:03:07', '2020-04-19 13:03:07');
INSERT INTO `collects` VALUES (3, 1, 17, 'true', '2020-04-19 13:03:09', '2020-04-19 13:03:09');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '默认好评',
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `goods_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 1, '很好吃', '2020-04-19 13:13:12', '2020-04-19 13:13:12', 1);
INSERT INTO `comments` VALUES (2, 1, '很好吃', '2020-04-19 13:13:12', '2020-04-19 13:13:12', 7);
INSERT INTO `comments` VALUES (3, 1, '很好吃', '2020-04-19 13:13:12', '2020-04-19 13:13:12', 10);
INSERT INTO `comments` VALUES (4, 1, '糖醋鲤鱼很地道', '2020-04-19 13:14:27', '2020-04-19 13:14:27', 2);
INSERT INTO `comments` VALUES (5, 1, '糖醋鲤鱼很地道', '2020-04-19 13:14:27', '2020-04-19 13:14:27', 4);
INSERT INTO `comments` VALUES (6, 1, '糖醋鲤鱼很地道', '2020-04-19 13:14:27', '2020-04-19 13:14:27', 16);
INSERT INTO `comments` VALUES (7, 1, '糖醋鲤鱼很地道', '2020-04-19 13:14:27', '2020-04-19 13:14:27', 20);

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '单位:分',
  `cover` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '封面',
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES (1, '馒头', '馒头以小麦面粉为主要原料，是中国人日常主食之一。', 1, '1.5', '/upload/1587295773447747.jpg', '2020-04-19 11:29:33', '2020-04-19 11:29:33');
INSERT INTO `goods` VALUES (2, '米饭', '大米性平、味甘； 有补中益气、健脾养胃、益精强志、和五脏、通血脉、聪耳明目、止烦、止渴、止泻的功效', 1, '2', '/upload/1587295817585005.jpg', '2020-04-19 11:30:17', '2020-04-19 11:30:17');
INSERT INTO `goods` VALUES (3, '冰可乐', '可口可乐一罐', 2, '3', '/upload/1587295852344821.jpg', '2020-04-19 11:30:52', '2020-04-19 11:30:52');
INSERT INTO `goods` VALUES (4, '衡水老白干', '衡水老白干始于汉代(公元104年)，知名于唐代，正式定名于明代。 在1915年巴拿马万国博览会  ，荣获赛会最高荣誉“甲等金奖”', 2, '35', '/upload/1587295912559057.jpg', '2020-04-19 11:31:52', '2020-04-19 11:31:52');
INSERT INTO `goods` VALUES (5, '果粒橙', '果粒橙一大瓶', 2, '8.5', '/upload/1587295945604608.jpg', '2020-04-19 11:32:25', '2020-04-19 11:32:25');
INSERT INTO `goods` VALUES (6, '飞天茅台53度', '2019年飞天茅台53度500ml', 2, '1599.9', '/upload/1587296028342571.jpg', '2020-04-19 11:32:55', '2020-04-19 11:33:48');
INSERT INTO `goods` VALUES (7, '农夫山泉', '小瓶农夫山泉', 2, '1.5', '/upload/1587296071909497.jpg', '2020-04-19 11:34:31', '2020-04-19 11:34:31');
INSERT INTO `goods` VALUES (8, '菠萝啤', '菠萝啤零酒精', 2, '3.5', '/upload/1587296126363303.jpg', '2020-04-19 11:35:26', '2020-04-19 11:35:26');
INSERT INTO `goods` VALUES (9, '黄酒', '黄酒500ml', 2, '35', '/upload/1587296177449901.jpg', '2020-04-19 11:36:17', '2020-04-19 11:36:17');
INSERT INTO `goods` VALUES (10, '西红柿炒鸡蛋盖饭', '西红柿炒鸡蛋盖饭', 3, '15', '/upload/1587296323374153.jpg', '2020-04-19 11:38:43', '2020-04-19 11:38:43');
INSERT INTO `goods` VALUES (11, '回锅肉盖饭', '回锅肉盖饭', 3, '22', '/upload/1587296339649093.jpg', '2020-04-19 11:38:59', '2020-04-19 11:38:59');
INSERT INTO `goods` VALUES (12, '鱼香肉丝盖饭', '鱼香肉丝盖饭', 3, '18', '/upload/1587296352209092.jpg', '2020-04-19 11:39:12', '2020-04-19 11:39:12');
INSERT INTO `goods` VALUES (13, '炒三鲜盖饭', '炒三鲜盖饭', 3, '15', '/upload/1587296388669577.jpg', '2020-04-19 11:39:48', '2020-04-19 11:39:48');
INSERT INTO `goods` VALUES (14, '鸡丁盖饭', '麻婆豆腐盖饭', 3, '12', '/upload/1587296426907575.jpg', '2020-04-19 11:40:26', '2020-04-19 11:40:47');
INSERT INTO `goods` VALUES (15, '青椒牛肉盖饭', '青椒牛肉盖饭', 3, '25', '/upload/1587296473421538.jpg', '2020-04-19 11:41:13', '2020-04-19 11:41:13');
INSERT INTO `goods` VALUES (16, '香干肉丝', '香干肉丝一份', 4, '22', '/upload/1587296587857513.jpg', '2020-04-19 11:43:07', '2020-04-19 11:43:07');
INSERT INTO `goods` VALUES (17, '川香辣子鸡', '川香辣子鸡', 4, '32', '/upload/1587296620569005.jpg', '2020-04-19 11:43:40', '2020-04-19 11:43:40');
INSERT INTO `goods` VALUES (18, '红烧肉', '红烧肉', 4, '35', '/upload/1587296814557906.jpg', '2020-04-19 11:46:54', '2020-04-19 11:46:54');
INSERT INTO `goods` VALUES (19, '酸辣土豆丝', '酸辣土豆丝', 4, '17', '/upload/1587296852194228.jpg', '2020-04-19 11:47:32', '2020-04-19 11:47:32');
INSERT INTO `goods` VALUES (20, '糖醋鲤鱼', '糖醋鲤鱼', 4, '55', '/upload/1587296884752962.jpg', '2020-04-19 11:48:04', '2020-04-19 11:48:04');
INSERT INTO `goods` VALUES (21, '风味茄子', '风味茄子', 4, '22', '/upload/1587296908550471.jpg', '2020-04-19 11:48:28', '2020-04-19 11:48:28');
INSERT INTO `goods` VALUES (22, '番茄牛腩', '番茄牛腩', 4, '50', '/upload/1587296970686012.jpg', '2020-04-19 11:49:30', '2020-04-19 11:49:30');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0待发货,1配送中,2已送达',
  `comment_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0未评论,1已评论',
  `freight` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2.00',
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `total` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `order_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `goods_id` int(11) NULL DEFAULT NULL,
  `time` int(11) NULL DEFAULT 0,
  `all_goods` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (18, '1574463996', 1, '福建省-龙岩市-漳平市 凤起路42号小太阳幼儿园', '周杰伦', 2, 1, '2.00', '2020-04-19 13:04:15', '2020-04-19 13:13:12', '20.00', '15812345678', '馒头  农夫山泉  西红柿炒鸡蛋盖饭', 1, 1587301552, '1-7-10');
INSERT INTO `orders` VALUES (19, '1534303112', 1, '福建省-龙岩市-漳平市 凤起路42号小太阳幼儿园', '周杰伦', 2, 1, '2.00', '2020-04-19 13:13:55', '2020-04-19 13:14:27', '116.00', '15812345678', '米饭  衡水老白干  香干肉丝  糖醋鲤鱼', 2, 1587302035, '2-4-16-20');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'summer', 'e10adc3949ba59abbe56e057f20f883e', '2020-04-19 11:28:26', '2020-04-19 11:28:26');

SET FOREIGN_KEY_CHECKS = 1;

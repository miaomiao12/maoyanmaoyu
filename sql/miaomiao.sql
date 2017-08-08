/*
Navicat MySQL Data Transfer

Source Server         : wctasksys
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : miaomiao

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-05 09:53:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `cart_good_id` int(11) DEFAULT NULL COMMENT '商品id',
  `cart_good_num` int(11) DEFAULT NULL COMMENT '商品数量',
  `cart_good_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_content` text,
  `c_trend_id` int(11) DEFAULT NULL,
  `c_user_id` int(11) DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) DEFAULT NULL,
  `g_price` int(11) DEFAULT NULL,
  `g_catalog` int(11) DEFAULT NULL,
  `g_info` text,
  `g_img` varchar(255) DEFAULT NULL,
  `g_address` varchar(255) DEFAULT NULL,
  `g_kucun` int(11) DEFAULT NULL,
  `g_sale` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_good_id` int(11) DEFAULT NULL,
  `o_number` int(11) DEFAULT NULL,
  `o_price` int(11) DEFAULT NULL,
  `o_time` datetime DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for `t_catalog`
-- ----------------------------
DROP TABLE IF EXISTS `t_catalog`;
CREATE TABLE `t_catalog` (
  `catalog_id` int(11) NOT NULL,
  `catalog_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`catalog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_catalog
-- ----------------------------

-- ----------------------------
-- Table structure for `trends`
-- ----------------------------
DROP TABLE IF EXISTS `trends`;
CREATE TABLE `trends` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_title` varchar(255) DEFAULT NULL,
  `t_sender` int(11) DEFAULT NULL COMMENT '发送者',
  `t_content` text,
  `t_addtime` datetime DEFAULT NULL,
  `t_address` varchar(255) DEFAULT NULL,
  `t_img` varchar(255) DEFAULT NULL,
  `catalog_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trends
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) DEFAULT NULL,
  `u_psd` varchar(255) DEFAULT NULL,
  `u_nickname` varchar(255) DEFAULT NULL,
  `reg_time` datetime DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `head_img` varchar(255) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_title` varchar(255) DEFAULT NULL,
  `t_sender` int(11) DEFAULT NULL,
  `t_content` text,
  `t_addtime` datetime DEFAULT NULL,
  `t_address` varchar(255) DEFAULT NULL,
  `t_video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------

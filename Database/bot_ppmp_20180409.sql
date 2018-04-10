/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bot_ppmp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-09 21:27:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bot_app_config`
-- ----------------------------
DROP TABLE IF EXISTS `bot_app_config`;
CREATE TABLE `bot_app_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `state_length` int(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_app_config
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_content_item`
-- ----------------------------
DROP TABLE IF EXISTS `bot_content_item`;
CREATE TABLE `bot_content_item` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_content_item
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_content_user`
-- ----------------------------
DROP TABLE IF EXISTS `bot_content_user`;
CREATE TABLE `bot_content_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `content_item_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_content_user
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_mission`
-- ----------------------------
DROP TABLE IF EXISTS `bot_mission`;
CREATE TABLE `bot_mission` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_mission
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_mission_user`
-- ----------------------------
DROP TABLE IF EXISTS `bot_mission_user`;
CREATE TABLE `bot_mission_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `mission_id` int(11) DEFAULT NULL,
  `comment` text,
  `image` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_mission_user
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_reg`
-- ----------------------------
DROP TABLE IF EXISTS `bot_reg`;
CREATE TABLE `bot_reg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `c1` text,
  `c2` text,
  `c3` text,
  `c4` text,
  `c5` text,
  `c6` text,
  `c7` text,
  `c8` text,
  `c9` text,
  `c10` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_reg
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_reg_item`
-- ----------------------------
DROP TABLE IF EXISTS `bot_reg_item`;
CREATE TABLE `bot_reg_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reg_field_id` int(11) NOT NULL,
  `question` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_reg_item
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_report_item`
-- ----------------------------
DROP TABLE IF EXISTS `bot_report_item`;
CREATE TABLE `bot_report_item` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_report_item
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_report_user`
-- ----------------------------
DROP TABLE IF EXISTS `bot_report_user`;
CREATE TABLE `bot_report_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `report_item_id` int(11) DEFAULT NULL,
  `comment` text,
  `image` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_report_user
-- ----------------------------

-- ----------------------------
-- Table structure for `bot_state_user`
-- ----------------------------
DROP TABLE IF EXISTS `bot_state_user`;
CREATE TABLE `bot_state_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `cat_id` enum('CONFIG','CONTENT','REPORT','MISSION','REG') DEFAULT NULL,
  `state` int(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bot_state_user
-- ----------------------------

/*
Navicat MySQL Data Transfer

Source Server         : Local_DB
Source Server Version : 50565
Source Host           : localhost:3306
Source Database       : kpi_monitor

Target Server Type    : MYSQL
Target Server Version : 50565
File Encoding         : 65001

Date: 2020-05-07 16:07:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `activity`
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
`activity_id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`kpi_id`  int(11) NULL DEFAULT NULL ,
`activity_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`activity_detail`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
`activity_start_date`  date NULL DEFAULT NULL ,
`activity_end_date`  date NULL DEFAULT NULL ,
`activity_status`  enum('1','9','0') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`activity_color`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`d_update`  timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
PRIMARY KEY (`activity_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of activity
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `kpi`
-- ----------------------------
DROP TABLE IF EXISTS `kpi`;
CREATE TABLE `kpi` (
`kpi_id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`kpi_type_id`  int(11) NULL DEFAULT NULL ,
`kpi_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`kpi_template`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
`kpi_taget`  double NULL DEFAULT NULL ,
`kpi_result`  double NULL DEFAULT NULL ,
`kpi_flag`  enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`kpi_start_date`  date NULL DEFAULT NULL ,
`kpi_end_date`  date NULL DEFAULT NULL ,
`kpi_process_date`  date NULL DEFAULT NULL ,
`kpi_color`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`d_update`  timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
PRIMARY KEY (`kpi_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of kpi
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `report`
-- ----------------------------
DROP TABLE IF EXISTS `report`;
CREATE TABLE `report` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`kpi_id`  int(11) NULL DEFAULT NULL ,
`kpi_date_report`  date NULL DEFAULT NULL ,
`kpi_result`  double NULL DEFAULT NULL ,
`kpi_comment`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
`d_update`  timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of report
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `type`
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
`kpi_type_id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`kpi_type_name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`kpi_type_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of type
-- ----------------------------
BEGIN;
INSERT INTO `type` VALUES ('1', 'QOF'), ('2', 'Ranking'), ('3', 'โครงการ');
COMMIT;

-- ----------------------------
-- Auto increment value for `activity`
-- ----------------------------
ALTER TABLE `activity` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `kpi`
-- ----------------------------
ALTER TABLE `kpi` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `report`
-- ----------------------------
ALTER TABLE `report` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `type`
-- ----------------------------
ALTER TABLE `type` AUTO_INCREMENT=4;

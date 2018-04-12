/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tongxun

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-14 10:48:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for a_bumen
-- ----------------------------
DROP TABLE IF EXISTS `a_bumen`;
CREATE TABLE `a_bumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ctime` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '状态 0正常 -1删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of a_bumen
-- ----------------------------
INSERT INTO `a_bumen` VALUES ('1', '管理员', '2017-12-07 12:00:32', '1');
INSERT INTO `a_bumen` VALUES ('2', '超级管理员', '2017-12-08 12:05:18', '1');
INSERT INTO `a_bumen` VALUES ('3', '总裁办', '2017-12-08 12:05:31', '0');
INSERT INTO `a_bumen` VALUES ('4', '研发部', '2017-12-08 12:05:46', '0');
INSERT INTO `a_bumen` VALUES ('5', '总裁办啊', '2017-12-08 19:19:54', '0');
INSERT INTO `a_bumen` VALUES ('6', '大声疾呼大', '2017-12-08 23:04:25', '1');
INSERT INTO `a_bumen` VALUES ('7', '研发部', '2017-12-09 10:44:00', '1');
INSERT INTO `a_bumen` VALUES ('8', '产品部', '2017-12-09 10:52:30', '1');
INSERT INTO `a_bumen` VALUES ('9', '删除部门', '2017-12-09 10:52:38', '0');

-- ----------------------------
-- Table structure for a_common_user
-- ----------------------------
DROP TABLE IF EXISTS `a_common_user`;
CREATE TABLE `a_common_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teluserid` int(11) DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of a_common_user
-- ----------------------------
INSERT INTO `a_common_user` VALUES ('9', '9', '2017-12-10 15:51:39', '17');
INSERT INTO `a_common_user` VALUES ('10', '19', '2017-12-10 15:54:25', '17');

-- ----------------------------
-- Table structure for a_log
-- ----------------------------
DROP TABLE IF EXISTS `a_log`;
CREATE TABLE `a_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) NOT NULL DEFAULT '',
  `action` varchar(32) NOT NULL DEFAULT '',
  `ctime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of a_log
-- ----------------------------
INSERT INTO `a_log` VALUES ('1', '16', 'index', '2017-12-09 10:44:23');
INSERT INTO `a_log` VALUES ('2', '16', 'index', '2017-12-09 10:44:35');
INSERT INTO `a_log` VALUES ('3', '16', 'table_complete', '2017-12-09 10:44:38');
INSERT INTO `a_log` VALUES ('4', '16', '', '2017-12-09 10:44:40');
INSERT INTO `a_log` VALUES ('5', '16', '', '2017-12-09 10:44:47');
INSERT INTO `a_log` VALUES ('6', '16', 'table_complete', '2017-12-09 10:44:48');
INSERT INTO `a_log` VALUES ('7', '16', '', '2017-12-09 10:44:53');
INSERT INTO `a_log` VALUES ('8', '16', '', '2017-12-09 10:44:59');
INSERT INTO `a_log` VALUES ('9', '16', 'table_complete', '2017-12-09 10:45:00');
INSERT INTO `a_log` VALUES ('10', '16', '', '2017-12-09 10:45:02');
INSERT INTO `a_log` VALUES ('11', '16', '', '2017-12-09 10:45:13');
INSERT INTO `a_log` VALUES ('12', '16', 'table_complete', '2017-12-09 10:45:14');
INSERT INTO `a_log` VALUES ('13', '16', 'table_complete', '2017-12-09 10:45:19');
INSERT INTO `a_log` VALUES ('14', '16', 'table_complete', '2017-12-09 10:45:25');
INSERT INTO `a_log` VALUES ('15', '16', 'form_validate', '2017-12-09 10:45:30');
INSERT INTO `a_log` VALUES ('16', '16', 'form_validate', '2017-12-09 10:45:37');
INSERT INTO `a_log` VALUES ('17', '16', 'form_validate', '2017-12-09 10:45:38');
INSERT INTO `a_log` VALUES ('18', '16', 'form_basic', '2017-12-09 10:45:48');
INSERT INTO `a_log` VALUES ('19', '16', 'form_basic', '2017-12-09 10:45:55');
INSERT INTO `a_log` VALUES ('20', '16', 'form_basic', '2017-12-09 10:45:56');
INSERT INTO `a_log` VALUES ('21', '16', 'logout', '2017-12-09 10:46:03');
INSERT INTO `a_log` VALUES ('22', '16', 'index', '2017-12-09 10:47:05');
INSERT INTO `a_log` VALUES ('23', '16', 'index', '2017-12-09 10:48:15');
INSERT INTO `a_log` VALUES ('24', '16', 'index', '2017-12-09 10:48:32');
INSERT INTO `a_log` VALUES ('25', '16', 'index', '2017-12-09 10:49:03');
INSERT INTO `a_log` VALUES ('26', '16', 'index', '2017-12-09 10:49:19');
INSERT INTO `a_log` VALUES ('27', '14', 'index', '2017-12-09 10:52:54');
INSERT INTO `a_log` VALUES ('28', '14', 'index', '2017-12-09 10:52:57');
INSERT INTO `a_log` VALUES ('29', '14', 'table_complete', '2017-12-09 10:52:57');
INSERT INTO `a_log` VALUES ('30', '14', '', '2017-12-09 10:53:01');
INSERT INTO `a_log` VALUES ('31', '14', '', '2017-12-09 10:53:07');
INSERT INTO `a_log` VALUES ('32', '14', 'table_complete', '2017-12-09 10:53:08');
INSERT INTO `a_log` VALUES ('33', '14', '', '2017-12-09 10:53:11');
INSERT INTO `a_log` VALUES ('34', '14', '', '2017-12-09 10:53:17');
INSERT INTO `a_log` VALUES ('35', '14', 'table_complete', '2017-12-09 10:53:18');
INSERT INTO `a_log` VALUES ('36', '14', 'table_complete', '2017-12-09 10:53:22');
INSERT INTO `a_log` VALUES ('37', '14', 'ad', '2017-12-09 10:53:24');
INSERT INTO `a_log` VALUES ('38', '14', 'ad', '2017-12-09 10:53:26');
INSERT INTO `a_log` VALUES ('39', '14', 'table_complete', '2017-12-09 10:53:28');
INSERT INTO `a_log` VALUES ('40', '14', 'table_complete', '2017-12-09 10:53:30');
INSERT INTO `a_log` VALUES ('41', '14', 'de', '2017-12-09 10:53:33');
INSERT INTO `a_log` VALUES ('42', '14', 'table_complete', '2017-12-09 10:53:33');
INSERT INTO `a_log` VALUES ('43', '14', 'form_validate', '2017-12-09 10:53:35');
INSERT INTO `a_log` VALUES ('44', '14', 'form_basic', '2017-12-09 10:53:39');
INSERT INTO `a_log` VALUES ('45', '14', 'form_basic', '2017-12-09 10:53:44');
INSERT INTO `a_log` VALUES ('46', '14', 'form_basic', '2017-12-09 10:53:45');
INSERT INTO `a_log` VALUES ('47', '14', 'form_basic', '2017-12-09 10:53:47');
INSERT INTO `a_log` VALUES ('48', '14', 'index', '2017-12-09 10:54:08');
INSERT INTO `a_log` VALUES ('49', '14', 'form_validate', '2017-12-09 10:54:15');
INSERT INTO `a_log` VALUES ('50', '14', 'form_validate', '2017-12-09 10:54:16');
INSERT INTO `a_log` VALUES ('51', '14', 'form_validate', '2017-12-09 10:54:17');
INSERT INTO `a_log` VALUES ('52', '14', 'form_validate', '2017-12-09 10:54:25');
INSERT INTO `a_log` VALUES ('53', '14', 'form_validate', '2017-12-09 10:54:26');
INSERT INTO `a_log` VALUES ('54', '14', 'form_basic', '2017-12-09 10:54:30');
INSERT INTO `a_log` VALUES ('55', '14', 'form_basic', '2017-12-09 10:54:36');
INSERT INTO `a_log` VALUES ('56', '14', 'form_basic', '2017-12-09 10:54:37');
INSERT INTO `a_log` VALUES ('57', '14', 'table_complete', '2017-12-09 10:54:42');
INSERT INTO `a_log` VALUES ('58', '14', '', '2017-12-09 10:54:44');
INSERT INTO `a_log` VALUES ('59', '14', '', '2017-12-09 10:54:53');
INSERT INTO `a_log` VALUES ('60', '14', 'table_complete', '2017-12-09 10:54:54');
INSERT INTO `a_log` VALUES ('61', '14', 'table_complete', '2017-12-09 10:54:57');
INSERT INTO `a_log` VALUES ('62', '14', 'logout', '2017-12-09 10:55:00');
INSERT INTO `a_log` VALUES ('63', '17', 'index', '2017-12-10 15:17:20');
INSERT INTO `a_log` VALUES ('64', '17', 'index', '2017-12-10 15:23:04');
INSERT INTO `a_log` VALUES ('65', '17', 'index', '2017-12-10 15:23:59');
INSERT INTO `a_log` VALUES ('66', '17', 'index', '2017-12-10 15:24:05');
INSERT INTO `a_log` VALUES ('67', '17', 'table_complete', '2017-12-10 15:30:56');
INSERT INTO `a_log` VALUES ('68', '17', '', '2017-12-10 15:30:58');
INSERT INTO `a_log` VALUES ('69', '17', '', '2017-12-10 15:33:03');
INSERT INTO `a_log` VALUES ('70', '17', '', '2017-12-10 15:33:17');
INSERT INTO `a_log` VALUES ('71', '17', '', '2017-12-10 15:33:39');
INSERT INTO `a_log` VALUES ('72', '17', '', '2017-12-10 15:33:43');
INSERT INTO `a_log` VALUES ('73', '17', '', '2017-12-10 15:34:12');
INSERT INTO `a_log` VALUES ('74', '17', '', '2017-12-10 15:36:38');
INSERT INTO `a_log` VALUES ('75', '17', 'table_complete', '2017-12-10 15:39:24');
INSERT INTO `a_log` VALUES ('76', '17', '', '2017-12-10 15:39:28');
INSERT INTO `a_log` VALUES ('77', '17', '', '2017-12-10 15:39:30');
INSERT INTO `a_log` VALUES ('78', '17', 'table_complete', '2017-12-10 15:39:31');
INSERT INTO `a_log` VALUES ('79', '17', 'table_complete', '2017-12-10 15:39:32');
INSERT INTO `a_log` VALUES ('80', '17', 'ad', '2017-12-10 15:39:34');
INSERT INTO `a_log` VALUES ('81', '17', 'table_complete', '2017-12-10 15:40:08');
INSERT INTO `a_log` VALUES ('82', '17', 'table_complete', '2017-12-10 15:40:33');
INSERT INTO `a_log` VALUES ('83', '17', 'table_complete', '2017-12-10 15:40:40');
INSERT INTO `a_log` VALUES ('84', '17', 'table_complete', '2017-12-10 15:40:48');
INSERT INTO `a_log` VALUES ('85', '17', '', '2017-12-10 15:40:51');
INSERT INTO `a_log` VALUES ('86', '17', '', '2017-12-10 15:50:52');
INSERT INTO `a_log` VALUES ('87', '17', '', '2017-12-10 15:50:57');
INSERT INTO `a_log` VALUES ('88', '17', 'table_complete', '2017-12-10 15:50:58');
INSERT INTO `a_log` VALUES ('89', '17', '', '2017-12-10 15:51:32');
INSERT INTO `a_log` VALUES ('90', '17', '', '2017-12-10 15:51:39');
INSERT INTO `a_log` VALUES ('91', '17', 'table_complete', '2017-12-10 15:51:40');
INSERT INTO `a_log` VALUES ('92', '17', 'table_complete', '2017-12-10 15:53:49');
INSERT INTO `a_log` VALUES ('93', '17', '', '2017-12-10 15:54:07');
INSERT INTO `a_log` VALUES ('94', '17', '', '2017-12-10 15:54:25');
INSERT INTO `a_log` VALUES ('95', '17', 'table_complete', '2017-12-10 15:54:26');
INSERT INTO `a_log` VALUES ('96', '17', '', '2017-12-10 15:54:31');
INSERT INTO `a_log` VALUES ('97', '17', '', '2017-12-10 15:54:33');
INSERT INTO `a_log` VALUES ('98', '17', 'table_complete', '2017-12-10 15:54:34');
INSERT INTO `a_log` VALUES ('99', '17', 'table_complete', '2017-12-10 15:54:35');
INSERT INTO `a_log` VALUES ('100', '17', 'table_complete', '2017-12-10 15:54:35');
INSERT INTO `a_log` VALUES ('101', '17', 'table_complete', '2017-12-10 15:54:43');
INSERT INTO `a_log` VALUES ('102', '17', 'del', '2017-12-10 15:54:45');
INSERT INTO `a_log` VALUES ('103', '17', 'table_complete', '2017-12-10 15:54:45');
INSERT INTO `a_log` VALUES ('104', '17', 'table_complete', '2017-12-10 15:55:34');
INSERT INTO `a_log` VALUES ('105', '17', 'index', '2017-12-10 15:55:40');
INSERT INTO `a_log` VALUES ('106', '17', 'table_complete', '2017-12-10 15:55:42');
INSERT INTO `a_log` VALUES ('107', '17', '', '2017-12-10 15:55:45');
INSERT INTO `a_log` VALUES ('108', '17', '', '2017-12-10 16:10:44');
INSERT INTO `a_log` VALUES ('109', '17', '', '2017-12-10 16:10:48');
INSERT INTO `a_log` VALUES ('110', '17', '', '2017-12-10 16:11:03');
INSERT INTO `a_log` VALUES ('111', '17', 'table_complete', '2017-12-10 16:11:21');
INSERT INTO `a_log` VALUES ('112', '17', '', '2017-12-10 16:11:57');
INSERT INTO `a_log` VALUES ('113', '17', '', '2017-12-10 16:12:08');
INSERT INTO `a_log` VALUES ('114', '17', '', '2017-12-10 16:16:37');
INSERT INTO `a_log` VALUES ('115', '17', '', '2017-12-10 16:16:42');
INSERT INTO `a_log` VALUES ('116', '17', '', '2017-12-10 16:16:59');
INSERT INTO `a_log` VALUES ('117', '17', '', '2017-12-10 16:17:15');
INSERT INTO `a_log` VALUES ('118', '17', '', '2017-12-10 16:17:21');
INSERT INTO `a_log` VALUES ('119', '17', '', '2017-12-10 16:18:07');
INSERT INTO `a_log` VALUES ('120', '17', 'index', '2017-12-10 16:18:18');
INSERT INTO `a_log` VALUES ('121', '17', 'table_complete', '2017-12-10 16:18:21');
INSERT INTO `a_log` VALUES ('122', '17', 'form_validate', '2017-12-10 16:18:22');
INSERT INTO `a_log` VALUES ('123', '17', 'table_complete', '2017-12-10 16:18:23');
INSERT INTO `a_log` VALUES ('124', '17', '', '2017-12-10 16:18:25');
INSERT INTO `a_log` VALUES ('125', '17', '', '2017-12-10 16:18:28');
INSERT INTO `a_log` VALUES ('126', '17', '', '2017-12-10 16:19:32');
INSERT INTO `a_log` VALUES ('127', '17', '', '2017-12-10 16:19:36');
INSERT INTO `a_log` VALUES ('128', '17', '', '2017-12-10 16:19:58');
INSERT INTO `a_log` VALUES ('129', '17', '', '2017-12-10 16:20:13');
INSERT INTO `a_log` VALUES ('130', '17', '', '2017-12-10 16:20:43');
INSERT INTO `a_log` VALUES ('131', '17', '', '2017-12-10 16:21:02');
INSERT INTO `a_log` VALUES ('132', '17', '', '2017-12-10 16:21:16');
INSERT INTO `a_log` VALUES ('133', '17', '', '2017-12-10 16:21:44');
INSERT INTO `a_log` VALUES ('134', '17', '', '2017-12-10 16:22:27');
INSERT INTO `a_log` VALUES ('135', '17', '', '2017-12-10 16:22:30');
INSERT INTO `a_log` VALUES ('136', '17', '', '2017-12-10 16:22:43');
INSERT INTO `a_log` VALUES ('137', '17', '', '2017-12-10 16:23:03');
INSERT INTO `a_log` VALUES ('138', '17', 'table_complete', '2017-12-10 16:23:04');
INSERT INTO `a_log` VALUES ('139', '17', 'table_complete', '2017-12-10 16:23:21');
INSERT INTO `a_log` VALUES ('140', '17', 'del', '2017-12-10 16:23:24');
INSERT INTO `a_log` VALUES ('141', '17', 'table_complete', '2017-12-10 16:23:24');
INSERT INTO `a_log` VALUES ('142', '17', '', '2017-12-10 16:23:25');
INSERT INTO `a_log` VALUES ('143', '17', '', '2017-12-10 16:23:31');
INSERT INTO `a_log` VALUES ('144', '17', '', '2017-12-10 16:23:33');
INSERT INTO `a_log` VALUES ('145', '17', 'table_complete', '2017-12-10 16:23:34');
INSERT INTO `a_log` VALUES ('146', '17', 'del', '2017-12-10 16:23:36');
INSERT INTO `a_log` VALUES ('147', '17', 'table_complete', '2017-12-10 16:23:36');
INSERT INTO `a_log` VALUES ('148', '17', '', '2017-12-10 16:23:41');
INSERT INTO `a_log` VALUES ('149', '17', '', '2017-12-10 16:24:04');
INSERT INTO `a_log` VALUES ('150', '17', 'form_validate', '2017-12-10 16:25:00');
INSERT INTO `a_log` VALUES ('151', '17', '', '2017-12-10 16:25:47');
INSERT INTO `a_log` VALUES ('152', '17', 'table_complete', '2017-12-10 16:25:50');
INSERT INTO `a_log` VALUES ('153', '17', '', '2017-12-10 16:25:51');
INSERT INTO `a_log` VALUES ('154', '17', '', '2017-12-10 16:26:10');
INSERT INTO `a_log` VALUES ('155', '17', '', '2017-12-10 16:26:14');
INSERT INTO `a_log` VALUES ('156', '17', '', '2017-12-10 16:26:15');
INSERT INTO `a_log` VALUES ('157', '17', '', '2017-12-10 16:26:20');

-- ----------------------------
-- Table structure for a_message
-- ----------------------------
DROP TABLE IF EXISTS `a_message`;
CREATE TABLE `a_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `uid` int(11) DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of a_message
-- ----------------------------
INSERT INTO `a_message` VALUES ('1', '1', '9', '2017-12-09 10:18:45');
INSERT INTO `a_message` VALUES ('2', '不错的一个通讯录', '16', '2017-12-09 10:45:55');
INSERT INTO `a_message` VALUES ('3', '不错的一个东西', '14', '2017-12-09 10:53:44');
INSERT INTO `a_message` VALUES ('4', 'h5反馈', '14', '2017-12-09 10:54:36');

-- ----------------------------
-- Table structure for a_user
-- ----------------------------
DROP TABLE IF EXISTS `a_user`;
CREATE TABLE `a_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `bumen` int(11) DEFAULT NULL,
  `touxiang` varchar(255) NOT NULL,
  `ctime` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '状态 0正常 -1删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of a_user
-- ----------------------------
INSERT INTO `a_user` VALUES ('9', '超级管理员', 'admin', 'admin@qq.com', 'admin', '男', '2', './Uploads/2017-12-09/5a2b4b273c01c.jpg', '2017-12-09 10:42:35', '3');
INSERT INTO `a_user` VALUES ('14', '普通管理员', 'test', 'pt@qq.com', '13393232032', '男', '1', './Uploads/2017-12-09/5a2b5061c9ebf.jpg', '2017-12-09 10:54:25', '2');
INSERT INTO `a_user` VALUES ('15', '普通用户', 'test', 'ptyh@qq.com', '17600900987', '女', '6', './Uploads/2017-12-09/5a2b4db734924.jpg', '2017-12-09 10:43:03', '0');
INSERT INTO `a_user` VALUES ('16', 'test', 'test', 'test@qq.com', '17711111111', '女', '5', './Uploads/2017-12-09/5a2b4e51c710d.jpg', '2017-12-09 10:45:37', '0');
INSERT INTO `a_user` VALUES ('17', '用户1', 'test', 'yh1@qq.com', '13333333333', '男', '7', './Uploads/2017-12-09/5a2b4f8e04973.jpg', '2017-12-09 10:50:54', '1');
INSERT INTO `a_user` VALUES ('18', '用户2', 'test', 'yh2@qq.com', '13311111111', '男', '7', './Uploads/2017-12-09/5a2b4fa870094.jpg', '2017-12-09 10:51:20', '1');
INSERT INTO `a_user` VALUES ('19', 'yh3', 'test', 'yh3@qq.com', '13322222222', '女', '7', './Uploads/2017-12-09/5a2b4fbea27db.jpg', '2017-12-09 10:51:42', '1');

/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : terror

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-28 18:49:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for commodity
-- ----------------------------
DROP TABLE IF EXISTS `commodity`;
CREATE TABLE `commodity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '标题',
  `content` varchar(255) DEFAULT NULL COMMENT '描述',
  `pic` varchar(80) NOT NULL COMMENT '图片',
  `music` varchar(80) NOT NULL COMMENT '背景音乐',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态 0下架 1上架',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='terror商品表';

-- ----------------------------
-- Records of commodity
-- ----------------------------
INSERT INTO `commodity` VALUES ('1', '测试', '从前有座山', 'https://www.baidu.com/img/bd_logo1.png?qua=high', '', '1');
INSERT INTO `commodity` VALUES ('2', '测试22', '从前有座山', 'https://www.baidu.com/img/bd_logo1.png?qua=high', '', '1');
INSERT INTO `commodity` VALUES ('3', '测试33', '从前有座山', 'https://www.baidu.com/img/bd_logo1.png?qua=high', '', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL COMMENT '菜单标题',
  `url` varchar(50) NOT NULL COMMENT '菜单url地址',
  `pid` int(10) unsigned NOT NULL COMMENT '父节点id',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 0禁用 1启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '权限管理', '', '0', '1');
INSERT INTO `menu` VALUES ('6', '角色管理', 'admin/role/index', '1', '1');
INSERT INTO `menu` VALUES ('3', '添加用户', 'admin/user/add', '2', '1');
INSERT INTO `menu` VALUES ('4', '编辑用户', 'admin/user/edit', '2', '1');
INSERT INTO `menu` VALUES ('5', '删除用户', 'admin/user/del', '2', '1');
INSERT INTO `menu` VALUES ('2', '用户管理', 'admin/user/index', '1', '1');
INSERT INTO `menu` VALUES ('7', '添加角色', 'admin/role/add', '6', '1');
INSERT INTO `menu` VALUES ('8', '编辑角色', 'admin/role/edit', '6', '1');
INSERT INTO `menu` VALUES ('9', '删除角色', 'admin/role/del', '6', '1');
INSERT INTO `menu` VALUES ('10', '节点管理', 'admin/node/index', '1', '1');
INSERT INTO `menu` VALUES ('11', '添加节点', 'admin/node/add', '10', '1');
INSERT INTO `menu` VALUES ('12', '编辑节点', 'admin/node/edit', '10', '1');
INSERT INTO `menu` VALUES ('13', '删除节点', 'admin/node/del', '10', '1');
INSERT INTO `menu` VALUES ('14', '订单管理', 'admin/order/index', '0', '1');
INSERT INTO `menu` VALUES ('16', '编辑订单', 'admin/order/edit', '15', '1');
INSERT INTO `menu` VALUES ('17', '删除订单', 'admin/order/del', '15', '1');
INSERT INTO `menu` VALUES ('15', '订单列表', 'admin/order/index', '14', '1');
INSERT INTO `menu` VALUES ('18', 'token列表', 'admin/token/index', '14', '1');
INSERT INTO `menu` VALUES ('19', 'token添加', 'admin/token/add', '18', '1');
INSERT INTO `menu` VALUES ('20', 'token修改', 'admin/token/edit', '18', '1');
INSERT INTO `menu` VALUES ('21', 'token删除', 'admin/token/del', '18', '1');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_num` varchar(20) NOT NULL COMMENT '订单号',
  `token` varchar(50) CHARACTER SET utf32 NOT NULL COMMENT '订单token',
  `time` int(10) NOT NULL COMMENT '订单创建时间（客户访问链接的时间）',
  `end_time` int(10) NOT NULL COMMENT '链接作废时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for token
-- ----------------------------
DROP TABLE IF EXISTS `token`;
CREATE TABLE `token` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(80) NOT NULL COMMENT 'url地址',
  `token` varchar(40) NOT NULL COMMENT 'token签名',
  `key` varchar(20) NOT NULL COMMENT 'token对应的key',
  `status` tinyint(1) NOT NULL COMMENT 'token状态 0未使用 1已使用',
  `time` int(10) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='token表';

-- ----------------------------
-- Records of token
-- ----------------------------
INSERT INTO `token` VALUES ('1', 'www.terror.com/index.php/index/token/b3c273cadd-471a64-b990dd-dd934262a1ae', 'b3c273cadd-471a64-b990dd-dd934262a1ae', '5ad610372a342', '1', '1523978295');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `titleimg` varchar(100) DEFAULT NULL COMMENT '用户头像',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 0禁用 1启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('5', 'dears', '2e3b923363a360d190d40056f6f60b3b', null, '1');

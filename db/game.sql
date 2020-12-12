/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : bookstore_vn

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-02 00:42:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chitiethd
-- ----------------------------
DROP TABLE IF EXISTS `chitiethd`;
CREATE TABLE `chitiethd` (
  `mahd` varchar(100) NOT NULL,
  `magame` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `gia` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`mahd`,`magame`),
  KEY `magame` (`magame`),
  CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `chitiethd_ibfk_2` FOREIGN KEY (`magame`) REFERENCES `game` (`magame`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chitiethd
-- ----------------------------
INSERT INTO `chitiethd` VALUES ('abcd@yahoo.com_1286282293', 'td01', '1', '450000');
INSERT INTO `chitiethd` VALUES ('abcd@yahoo.com_1286282293', 'th12', '1', '76000');

-- ----------------------------
-- Table structure for hoadon
-- ----------------------------
DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE `hoadon` (
  `mahd` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `ngayhd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tennguoinhan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachinguoinhan` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhan` date NOT NULL DEFAULT '0000-00-00',
  `dienthoainguoinhan` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`mahd`),
  KEY `email` (`email`),
  CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hoadon
-- ----------------------------
INSERT INTO `hoadon` VALUES ('abcd@yahoo.com_1286282293', 'abcd@yahoo.com', '2010-10-05 19:38:13', 'abc', 'd,skl', '2010-10-06', '234567');

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `matkhau` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO `khachhang` VALUES ('abcd@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Minh Triết', 'Q1', '99999999');
INSERT INTO `khachhang` VALUES ('hung.stu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đại Ca - Trần văn Hùng', 'Quận 3', '090090999');

-- ----------------------------
-- Table structure for loai
-- ----------------------------
DROP TABLE IF EXISTS `loai`;
CREATE TABLE `loai` (
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of loai
-- ----------------------------
INSERT INTO `loai` VALUES ('plhd', 'Phiêu lưu hành động');
INSERT INTO `loai` VALUES ('dk', 'Đối kháng');
INSERT INTO `loai` VALUES ('nv', 'Nhập vai');
INSERT INTO `loai` VALUES ('dx', 'Đua xe');
INSERT INTO `loai` VALUES ('bs', 'Bắn súng');
INSERT INTO `loai` VALUES ('tt', 'Thể thao');


-- ----------------------------
-- Table structure for nhaxb
-- ----------------------------
DROP TABLE IF EXISTS `nhasx`;
CREATE TABLE `nhasx` (
  `mansx` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tennsx` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mansx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nhaxb
-- ----------------------------
INSERT INTO `nhasx` VALUES ('be', 'Blizzard Entertainment');
INSERT INTO `nhasx` VALUES ('ac', 'Activision');
INSERT INTO `nhasx` VALUES ('mdg', 'Mad Dog Games');
INSERT INTO `nhasx` VALUES ('bet', 'Bethesda Softworks');
INSERT INTO `nhasx` VALUES ('ds', 'Deep Silver');
INSERT INTO `nhasx` VALUES ('ub', 'Ubisoft');
INSERT INTO `nhasx` VALUES ('so', 'Sony Entertainment');
INSERT INTO `nhasx` VALUES ('se', 'Sega');
INSERT INTO `nhasx` VALUES ('kt', 'Koei Tecmo');
INSERT INTO `nhasx` VALUES ('xg', 'XSEED Games');
INSERT INTO `nhasx` VALUES ('bng', 'Bandai Namco Games');
INSERT INTO `nhasx` VALUES ('sq', 'Square Enix');
INSERT INTO `nhasx` VALUES ('al', 'Altus');
INSERT INTO `nhasx` VALUES ('mg', 'Merge Games');

INSERT INTO `nhasx` VALUES ('ea', 'Electronic Arts');

INSERT INTO `nhasx` VALUES ('ko', 'Konami');

-- ----------------------------
-- Table structure for quantri
-- ----------------------------
DROP TABLE IF EXISTS `quantri`;
CREATE TABLE `quantri` (
  `username` varchar(30) NOT NULL,
  `matkhau` varchar(32) DEFAULT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `quyen` int(1) NOT NULL COMMENT '1:  supper admin, 2:nhan viên, 3:...',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of quantri
-- ----------------------------
INSERT INTO `quantri` VALUES ('abcd', '81dc9bdb52d04dc20036dbd8313ed055', 'Nguyễn văn A', '2');
INSERT INTO `quantri` VALUES ('hung', 'e10adc3949ba59abbe56e057f20f883e', 'Lên Văn An', '2');
INSERT INTO `quantri` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'Trần Văn Hùng', '1');

-- ----------------------------
-- Table structure for sach
-- ----------------------------
DROP TABLE IF EXISTS `game`;
CREATE TABLE `game` (
  `magame` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tengame` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mansx` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`magame`),
  KEY `mansx` (`mansx`,`maloai`),
  KEY `maloai` (`maloai`),
  CONSTRAINT `game_ibfk_1` FOREIGN KEY (`mansx`) REFERENCES `nhasx` (`mansx`) ON UPDATE CASCADE,
  CONSTRAINT `game_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sach
-- ----------------------------
INSERT INTO `game` VALUES ('bs01', 'Overwatch: Legendary Edition', 'https://www.youtube.com/embed/FqnKB22pOC0', '930000', 'bs01.jpg', 'be', 'bs');
INSERT INTO `game` VALUES ('bs02', 'Call of Duty: Advanced Warfare', 'https://www.youtube.com/embed/sFu5qXMuaJU', '750000', 'bs02.jpg', 'ac', 'bs');
INSERT INTO `game` VALUES ('bs03', 'World War Z', 'https://www.youtube.com/embed/YZ3Dx4tfirE', '1100000', 'bs03.jpg', 'mdg', 'bs');
INSERT INTO `game` VALUES ('bs04', 'Doom - EU', 'https://www.youtube.com/embed/FkklG9MA0vM', '800000', 'bs04.jpg', 'bet', 'bs');
INSERT INTO `game` VALUES ('bs05', 'Metro: Exodus', 'https://www.youtube.com/embed/fbbqlvuovQ0', '1030000', 'bs5.jpg', 'ds', 'bs');
INSERT INTO `game` VALUES ('plhd01', 'Assassin Creed: Valhalla', 'https://www.youtube.com/embed/ssrNcwxALS4', '1600000', 'plhd01.jpg', 'ub', 'plhd');
INSERT INTO `game` VALUES ('plhd02', 'Marvels Spider-Man: Miles Morales', 'https://www.youtube.com/embed/NTunTURbyUU', '1300000', 'plhd02.jpg', 'so', 'plhd');
INSERT INTO `game` VALUES ('plhd03', 'Yakuza: Like a Dragon SteelBook', 'https://www.youtube.com/embed/dNmM9pivqQ0', '1600000', 'plhd03.jpg', 'se', 'plhd');
INSERT INTO `game` VALUES ('dk01', 'Dead or Alive 6', 'https://www.youtube.com/embed/_-ZZzvxAwtk', '1500000', 'dk01.jpg', 'kt', 'dk');
INSERT INTO `game` VALUES ('dk02', 'J-STARS Victory Vs+ - 2ND', 'https://www.youtube.com/embed/FiopiSZ7hgs', '500000', 'dk02.jpg', 'bng', 'kd');
INSERT INTO `game` VALUES ('nv01', 'Final Fantasy VII Remake Deluxe Edition - ASIA', 'https://www.youtube.com/embed/4_qjybyni28', '3300000', 'nv01.jpg', 'sq', 'nv');
INSERT INTO `game` VALUES ('nv02', 'Persona 5 Royal Steelbook ', 'https://www.youtube.com/embed/SKpSpvFCZRw', '1700000', 'nv02.jpg', 'al', 'nv');
INSERT INTO `game` VALUES ('dx01', 'Ride 4', 'https://www.youtube.com/embed/xBQ7EYTuo88', '1400000', 'dx01.jpg', 'ds', 'dx');
INSERT INTO `game` VALUES ('dx02', 'Fast & Furious Crossroads', 'https://www.youtube.com/embed/sKfTkNMYq90', '1600000', 'dx02.jpg', 'bng', 'dx');
INSERT INTO `game` VALUES ('tt01', 'FIFA 21', 'https://www.youtube.com/embed/Jmliox1trPQ', '1300000', 'tt01.jpg', 'ea', 'tt');
INSERT INTO `game` VALUES ('tt02', 'eFootball PES 2021', 'https://www.youtube.com/embed/901CbZKXkaE', '980000', 'tt02.jpg', 'ko', 'tt');


/*
 Navicat Premium Data Transfer

 Source Server         : li
 Source Server Type    : MySQL
 Source Server Version : 50617
 Source Host           : 127.0.0.1:3306
 Source Schema         : us

 Target Server Type    : MySQL
 Target Server Version : 50617
 File Encoding         : 65001

 Date: 12/06/2019 10:26:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message`  (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `留言` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `时间` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `touxiang` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES (18, 'zz', '希望学校有个操场', '2019-06-07 13:07', 'upload/155988402682322.jpg');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `学号` int(11) NOT NULL,
  `姓名` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `性别` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `班级` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `身份证号码` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `手机号码` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `家庭电话` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `家庭地址` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `电子邮箱` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `备注` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`学号`) USING BTREE,
  UNIQUE INDEX `学号`(`学号`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (153111121, '李明', '男', '15信管2班', '350204199603113065', '13799840656', '6028356', '福建泉州浮桥街4号', '92803748@qq.com', '班长');
INSERT INTO `student` VALUES (163111124, '王婷', '女', '16软开3', '21324698812315', '15999840979', '6028356', '新疆省沙湾县金运小区2号楼', '35135@qq.com', '');
INSERT INTO `student` VALUES (163111125, '邱小栀', '女', '16动画1班', '320505199804287345', '17705058936', '5320269', '福建三明桃花村', '78908374@qq.com', '');
INSERT INTO `student` VALUES (173445926, '赵一珊', '女', '17软开3班', '346054199901115621', '15960182305', '5855063', '福建厦门湖里区', '987239578@qq.com', '学委');

-- ----------------------------
-- Table structure for teacher_psw
-- ----------------------------
DROP TABLE IF EXISTS `teacher_psw`;
CREATE TABLE `teacher_psw`  (
  `psw` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of teacher_psw
-- ----------------------------
INSERT INTO `teacher_psw` VALUES ('admin');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `学号` int(200) NOT NULL,
  `user_pw` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `姓名` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `学年` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `课程名称` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `学分` int(255) NULL DEFAULT NULL,
  `综合成绩` int(255) NULL DEFAULT NULL,
  `期末成绩` int(255) NULL DEFAULT NULL,
  `平时成绩` int(255) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (163111125, '789456', '邱小栀', '2016-2017', 'Java web', 2, 0, 0, 0);
INSERT INTO `user` VALUES (163111124, '123456', '王婷', '2018-2019', 'Java web', 2, 80, 75, 78);
INSERT INTO `user` VALUES (163111124, '', '王婷', '2018-2019', '软件测试', 2, 85, 80, 82);
INSERT INTO `user` VALUES (163111124, '', '王婷', '2018-2019', '大学英语', 2, 94, 92, 92);
INSERT INTO `user` VALUES (163111124, '', '', '2016-2017', '毛泽东思想和社会主义理论概论', 2, 88, 85, 85);
INSERT INTO `user` VALUES (163111124, '', '', '2016-2017', '思想道德修养与法律基础', 2, 72, 66, 78);
INSERT INTO `user` VALUES (163111124, '', '', '2016-2017', 'jQuery', 2, 50, 40, 45);
INSERT INTO `user` VALUES (163111124, '', '', '2016-2017', '操作系统', 2, 65, 62, 70);
INSERT INTO `user` VALUES (163111124, '', '', '2017-2018', 'C#', 2, 60, 52, 75);
INSERT INTO `user` VALUES (163111124, '', '', '2017-2018', '软件工程', 2, 72, 70, 75);
INSERT INTO `user` VALUES (163111124, '', '', '2017-2018', 'UI设计', 2, 89, 86, 92);
INSERT INTO `user` VALUES (163111124, '', '', '2017-2018', '高等数学', 2, 72, 68, 77);
INSERT INTO `user` VALUES (163111124, '', '', '2017-2018', 'PHP', 2, 90, 85, 88);
INSERT INTO `user` VALUES (163111124, '', '', '2017-2018', 'Asp.Net', 2, 92, 90, 92);
INSERT INTO `user` VALUES (163111125, '', '邱小栀', '2017-2018', 'C#', 3, 82, 80, 85);
INSERT INTO `user` VALUES (163111125, '', '邱小栀', '2017-2018', '高等数学', 3, 82, 80, 85);

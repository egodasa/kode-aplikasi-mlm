-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nm_member` varchar(30) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_member` (`id_member`, `nm_member`) VALUES
(1,	'1'),
(2,	'2'),
(3,	'3'),
(4,	'4'),
(5,	'5'),
(6,	'6'),
(7,	'7'),
(8,	'8'),
(9,	'9'),
(10,	'10');

DROP TABLE IF EXISTS `tb_referral`;
CREATE TABLE `tb_referral` (
  `id_ref` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `id_member_ref` int(11) NOT NULL,
  PRIMARY KEY (`id_ref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_referral` (`id_ref`, `id_member`, `id_member_ref`) VALUES
(11,	2,	1),
(12,	3,	1),
(13,	4,	1),
(14,	5,	2),
(15,	6,	2),
(16,	7,	3),
(17,	8,	4),
(18,	9,	5),
(19,	10,	5);

-- 2019-09-27 04:00:17

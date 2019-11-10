-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019-07-08 22:11:51
-- 服务器版本： 5.5.61-log
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdd_svip10000_co`
--

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_address`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_address` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `address_province` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '省份id',
  `address_city` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '城市id',
  `address_district` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '区县id',
  `address_concret` varchar(20) NOT NULL DEFAULT '' COMMENT '详细地址',
  `date` datetime DEFAULT NULL COMMENT '使用时间'
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pinduoduo_address`
--

INSERT INTO `pinduoduo_address` (`id`, `address_province`, `address_city`, `address_district`, `address_concret`, `date`) VALUES
(1, 6, 77, 708, '福永街道机场路1004号', '2019-06-26 16:07:08'),
(2, 6, 77, 3732, '观澜大道75号', '2019-06-26 16:07:16'),
(3, 6, 77, 707, '南山大道2019号', '2019-06-26 16:07:18'),
(4, 6, 77, 709, '新厦大道23号', '2019-06-26 16:07:18'),
(5, 6, 77, 705, '福华三路289号', '2019-06-26 16:07:19'),
(6, 6, 77, 706, '黄贝路2134号', '2019-06-26 16:07:21'),
(7, 6, 77, 708, '固戍福荣路5号', '2019-06-26 16:07:23'),
(8, 6, 77, 708, '宝安大道8230号', '2019-06-26 16:06:58'),
(9, 6, 77, 708, '凤凰岗路60-1号', '2019-06-26 16:06:59'),
(10, 6, 77, 708, '沿河路2号', '2019-06-26 16:06:59'),
(11, 6, 77, 708, '福一路43号', '2019-06-26 16:06:59'),
(12, 6, 77, 708, '金菊路一号4巷', '2019-06-26 16:06:59'),
(13, 6, 77, 708, '东方路29号', '2019-06-26 16:07:00'),
(14, 6, 77, 708, '福围中路36号', '2019-06-26 16:07:00'),
(15, 6, 77, 708, '温馨路70号', '2019-06-26 16:07:01'),
(16, 6, 77, 708, '征程二路9号', '2019-06-26 16:07:02'),
(17, 6, 77, 708, '码头路252号', '2019-06-26 16:07:02'),
(18, 6, 77, 708, '新和西九巷', '2019-06-26 16:07:02'),
(19, 6, 77, 708, '上合路59号', '2019-06-26 16:07:02'),
(20, 6, 77, 708, '工业路80号', '2019-06-26 16:07:04'),
(21, 6, 77, 708, '朝阳路10号', '2019-06-26 16:07:05'),
(22, 6, 77, 708, '公园路555号', '2019-06-26 16:07:06'),
(23, 6, 77, 708, '企安路12号', '2019-06-26 16:07:08'),
(24, 6, 77, 708, '上川路212号', '2019-06-26 16:07:08'),
(25, 6, 77, 708, '新安三路171号', '2019-06-26 16:07:09'),
(26, 6, 77, 708, '南昌路86号', '2019-06-26 16:07:10'),
(27, 6, 77, 708, '自由路北1巷', '2019-06-26 16:07:11'),
(28, 6, 77, 708, '沿河南路1号', '2019-06-26 16:07:11'),
(29, 6, 77, 708, '辛居路9号', '2019-06-26 16:07:11'),
(30, 6, 77, 708, '蜀风路13号', '2019-06-26 16:07:11'),
(31, 6, 77, 708, '有利路6号', '2019-06-26 16:07:12'),
(32, 6, 77, 708, '衙辛路4号', '2019-06-26 16:07:13'),
(33, 6, 77, 708, '兴业路3005号', '2019-06-26 16:07:13'),
(34, 6, 77, 708, '川一路5号', '2019-06-26 16:07:13'),
(35, 6, 77, 708, '新沙路306号', '2019-06-26 16:07:13'),
(36, 6, 77, 708, '宝安大道4016号', '2019-06-26 16:07:13'),
(37, 6, 77, 3732, '和平路108号', '2019-06-26 16:07:18'),
(38, 6, 77, 3732, '华盛路221号', '2019-06-26 16:07:19'),
(39, 6, 77, 3732, '华荣路58号', '2019-06-26 16:07:19'),
(40, 6, 77, 3732, '新塘村23号', '2019-06-26 16:07:19'),
(41, 6, 77, 3732, '梅龙大道2229号', '2019-06-26 16:07:19'),
(42, 6, 77, 3732, '华兴路19号', '2019-06-26 16:07:20'),
(43, 6, 77, 3732, '锦绣路8号', '2019-06-26 16:07:20'),
(44, 6, 77, 3732, '雪岗北路368号', '2019-06-26 16:07:20'),
(45, 6, 77, 3732, '布新路138号', '2019-06-26 16:07:20'),
(46, 6, 77, 3732, '水斗二路21号', '2019-06-26 16:07:20'),
(47, 6, 77, 3732, '布新路138号', '2019-06-26 16:07:20'),
(48, 6, 77, 3732, '龙观路3号', '2019-06-26 16:07:21'),
(49, 6, 77, 3732, '民治街道东环二路1号', '2019-06-26 16:07:21'),
(50, 6, 77, 3732, '观光路1301号', '2019-06-26 16:07:21'),
(51, 6, 77, 3732, '工业路28号', '2019-06-26 16:07:21'),
(52, 6, 77, 3732, '梅龙大道43号', '2019-06-26 16:07:21'),
(53, 6, 77, 3732, '龙峰二路317', '2019-06-26 16:07:21'),
(54, 6, 77, 3732, '龙观东路198号', '2019-06-26 16:07:22'),
(55, 6, 77, 3732, '华兴路19号', '2019-06-26 16:07:00'),
(56, 6, 77, 3732, '人民路3023号', '2019-06-26 16:07:00'),
(57, 6, 77, 3732, '建设路201号', '2019-06-26 16:07:00'),
(58, 6, 77, 3732, '玉龙路902号', '2019-06-26 16:07:01'),
(59, 6, 77, 3732, '华园道216号', '2019-06-26 16:07:01'),
(60, 6, 77, 3732, '华盛路34号', '2019-06-26 16:07:01'),
(61, 6, 77, 707, '蛇口太子路72号', '2019-06-26 16:07:01'),
(62, 6, 77, 707, '大新路188号', '2019-06-26 16:07:01'),
(63, 6, 77, 707, '南新路1064号', '2019-06-26 16:07:01'),
(64, 6, 77, 707, '南山大道2002号', '2019-06-26 16:07:02'),
(65, 6, 77, 707, '学府路101号', '2019-06-26 16:07:02'),
(66, 6, 77, 707, '桃园路5号', '2019-06-26 16:07:02'),
(67, 6, 77, 707, '深南大道12031号', '2019-06-26 16:07:02'),
(68, 6, 77, 707, '高新中四道11号', '2019-06-26 16:07:03'),
(69, 6, 77, 707, '创业路98号', '2019-06-26 16:07:03'),
(70, 6, 77, 707, '珠光路182号', '2019-06-26 16:07:03'),
(71, 6, 77, 707, '前海路3300号', '2019-06-26 16:07:03'),
(72, 6, 77, 707, '高新南环路18号', '2019-06-26 16:07:03'),
(73, 6, 77, 707, '桂庙路24号', '2019-06-26 16:07:03'),
(74, 6, 77, 707, '翠溪路1号', '2019-06-26 16:07:03'),
(75, 6, 77, 707, '南商路112号', '2019-06-26 16:07:04'),
(76, 6, 77, 707, '四海路20号', '2019-06-26 16:07:04'),
(77, 6, 77, 707, '沙河街55号', '2019-06-26 16:07:04'),
(78, 6, 77, 707, '一号路32号', '2019-06-26 16:07:04'),
(79, 6, 77, 707, '新中路33号', '2019-06-26 16:07:05'),
(80, 6, 77, 707, '龙城路360号', '2019-06-26 16:07:05'),
(81, 6, 77, 707, '桂庙路22号', '2019-06-26 16:07:06'),
(82, 6, 77, 707, '桂庙路62号', '2019-06-26 16:07:06'),
(83, 6, 77, 707, '常兴路102号', '2019-06-26 16:07:06'),
(84, 6, 77, 707, '沿湖路17号', '2019-06-26 16:07:07'),
(85, 6, 77, 707, '学府路123号', '2019-06-26 16:07:08'),
(86, 6, 77, 707, '兴工路11号', '2019-06-26 16:07:08'),
(87, 6, 77, 707, '华明路1号', '2019-06-26 16:07:09'),
(88, 6, 77, 707, '文心二路11号', '2019-06-26 16:07:09'),
(89, 6, 77, 707, '后海大道2002号', '2019-06-26 16:07:10'),
(90, 6, 77, 707, '龙珠五路2号', '2019-06-26 16:07:10'),
(91, 6, 77, 707, '科兴路11号', '2019-06-26 16:07:10'),
(92, 6, 77, 707, '常兴路138号', '2019-06-26 16:07:10'),
(93, 6, 77, 707, '桃李路33号', '2019-06-26 16:07:10'),
(94, 6, 77, 707, '艺园路168号', '2019-06-26 16:07:11'),
(95, 6, 77, 707, '南园新园路67号', '2019-06-26 16:07:12'),
(96, 6, 77, 709, '新木路329号', '2019-06-26 16:07:12'),
(97, 6, 77, 709, '埔厦路6号', '2019-06-26 16:07:12'),
(98, 6, 77, 709, '长发路13号', '2019-06-26 16:07:12'),
(99, 6, 77, 709, '坂雪岗大道4002号', '2019-06-26 16:07:12'),
(100, 6, 77, 709, '龙岗大道6002号', '2019-06-26 16:07:13'),
(101, 6, 77, 709, '深惠路1072', '2019-06-26 16:07:14'),
(102, 6, 77, 709, '平吉大道北295号', '2019-06-26 16:07:14'),
(103, 6, 77, 709, '六和路39-1号', '2019-06-26 16:07:14'),
(104, 6, 77, 709, '雪岗北路113号', '2019-06-26 16:07:14'),
(105, 6, 77, 709, '军田路91号', '2019-06-26 16:07:15'),
(106, 6, 77, 709, '龙飞大道669号', '2019-06-26 16:07:15'),
(107, 6, 77, 709, '龙岗大道5194号', '2019-06-26 16:07:15'),
(108, 6, 77, 709, '龙岗中心城西埔东街1号', '2019-06-26 16:07:15'),
(109, 6, 77, 709, '龙岗大道6002号', '2019-06-26 16:07:15'),
(110, 6, 77, 709, '雪围路6号', '2019-06-26 16:07:15'),
(111, 6, 77, 709, '共乐路2号', '2019-06-26 16:07:16'),
(112, 6, 77, 709, '力嘉路108号', '2019-06-26 16:07:21'),
(113, 6, 77, 709, '茂盛路1号', '2019-06-26 16:07:22'),
(114, 6, 77, 709, '勤富路32号', '2019-06-26 16:07:22'),
(115, 6, 77, 709, '雪岗路113号', '2019-06-26 16:07:22'),
(116, 6, 77, 709, '吉祥三路12号', '2019-06-26 16:07:23'),
(117, 6, 77, 709, '建新路2号', '2019-06-26 16:07:23'),
(118, 6, 77, 709, '南联路46号', '2019-06-26 16:07:23'),
(119, 6, 77, 709, '晨光路49号', '2019-06-26 16:07:23'),
(120, 6, 77, 709, '银珠路69号', '2019-06-26 16:07:24'),
(121, 6, 77, 709, '工业大道43号', '2019-06-26 16:07:24'),
(122, 6, 77, 709, '怡苑路38号', '2019-06-26 16:07:24'),
(123, 6, 77, 709, '龙岗大道6149号', '2019-06-26 16:06:57'),
(124, 6, 77, 709, '里浦街3号', '2019-06-26 16:06:57'),
(125, 6, 77, 709, '四联路353号', '2019-06-26 16:06:58'),
(126, 6, 77, 709, '环城南路5号', '2019-06-26 16:06:58'),
(127, 6, 77, 709, '向前路120号', '2019-06-26 16:06:58'),
(128, 6, 77, 709, '新瑞路21号', '2019-06-26 16:07:01'),
(129, 6, 77, 709, '佳业路5号', '2019-06-26 16:07:02'),
(130, 6, 77, 709, '宝龙大道81号', '2019-06-26 16:07:04'),
(131, 6, 77, 705, '福强路4155号', '2019-06-26 16:07:04'),
(132, 6, 77, 705, '百花一路2号', '2019-06-26 16:07:05'),
(133, 6, 77, 705, '红岭南路1049号', '2019-06-26 16:07:05'),
(134, 6, 77, 705, '百花四路2号', '2019-06-26 16:07:05'),
(135, 6, 77, 705, '笋岗西路2057号', '2019-06-26 16:07:07'),
(136, 6, 77, 705, '福中路315号', '2019-06-26 16:07:08'),
(137, 6, 77, 705, '福永路东2号', '2019-06-26 16:07:08'),
(138, 6, 77, 705, '深南大道2001号', '2019-06-26 16:07:09'),
(139, 6, 77, 705, '福民路139号', '2019-06-26 16:07:09'),
(140, 6, 77, 705, '福民路133号', '2019-06-26 16:07:09'),
(141, 6, 77, 705, '百花四路59号', '2019-06-26 16:07:09'),
(142, 6, 77, 705, '深惠路446号', '2019-06-26 16:07:09'),
(143, 6, 77, 705, '滨河大道9289号', '2019-06-26 16:07:10'),
(144, 6, 77, 705, '红荔路3008号', '2019-06-26 16:07:10'),
(145, 6, 77, 705, '八卦三路6号', '2019-06-26 16:07:10'),
(146, 6, 77, 705, '百花六路27号', '2019-06-26 16:07:11'),
(147, 6, 77, 705, '百花三路2号', '2019-06-26 16:07:12'),
(148, 6, 77, 705, '桂花路17号', '2019-06-26 16:07:12'),
(149, 6, 77, 705, '百花五路34号', '2019-06-26 16:07:13'),
(150, 6, 77, 705, '福中路15号', '2019-06-26 16:07:13'),
(151, 6, 77, 705, '百花四路9号', '2019-06-26 16:07:13'),
(152, 6, 77, 705, '益田路3013号', '2019-06-26 16:07:14'),
(153, 6, 77, 705, '凯丰路8号', '2019-06-26 16:07:14'),
(154, 6, 77, 705, '八卦三路88号', '2019-06-26 16:07:14'),
(155, 6, 77, 705, '振中路35号', '2019-06-26 16:07:14'),
(156, 6, 77, 705, '泰然四路94号', '2019-06-26 16:07:15'),
(157, 6, 77, 705, '深惠路446号', '2019-06-26 16:07:15'),
(158, 6, 77, 705, '八卦一路39号', '2019-06-26 16:07:15'),
(159, 6, 77, 705, '椰风道12号', '2019-06-26 16:07:16'),
(160, 6, 77, 705, '商报东路17号', '2019-06-26 16:07:16'),
(161, 6, 77, 705, '上沙椰树路一巷1号', '2019-06-26 16:07:16'),
(162, 6, 77, 705, '福荣路46号', '2019-06-26 16:07:17'),
(163, 6, 77, 705, '石厦北一街31号', '2019-06-26 16:07:17'),
(164, 6, 77, 705, '香梅路1074号', '2019-06-26 16:07:17'),
(165, 6, 77, 705, '布尾村116-1号', '2019-06-26 16:07:17'),
(166, 6, 77, 705, '祠堂街1号', '2019-06-26 16:07:17'),
(167, 6, 77, 706, '太白西路4017号', '2019-06-26 16:07:17'),
(168, 6, 77, 706, '布心村203号', '2019-06-26 16:07:17'),
(169, 6, 77, 706, '太白街4011号', '2019-06-26 16:07:18'),
(170, 6, 77, 706, '中兴路168号', '2019-06-26 16:07:18'),
(171, 6, 77, 706, '翠竹街道太宁路7', '2019-06-26 16:07:18'),
(172, 6, 77, 706, '深南东路4003号', '2019-06-26 16:07:18'),
(173, 6, 77, 706, '太安路98号', '2019-06-26 16:07:19'),
(174, 6, 77, 706, '红岗路1299号', '2019-06-26 16:07:19'),
(175, 6, 77, 706, '桂圆北路160号', '2019-06-26 16:07:19'),
(176, 6, 77, 706, '笋岗东路2008号', '2019-06-26 16:07:22'),
(177, 6, 77, 706, '太安路71号', '2019-06-26 16:07:22'),
(178, 6, 77, 706, '红岗路1299号', '2019-06-26 16:07:23'),
(179, 6, 77, 706, '文锦北路1081号', '2019-06-26 16:06:57'),
(180, 6, 77, 706, '红岗路1249号', '2019-06-26 16:06:58'),
(181, 6, 77, 706, '文锦中路2019号', '2019-06-26 16:06:58'),
(182, 6, 77, 706, '北站路3号', '2019-06-26 16:06:58'),
(183, 6, 77, 706, '太宁路111号', '2019-06-26 16:06:59'),
(184, 6, 77, 706, '红岗路1299号', '2019-06-26 16:06:59'),
(185, 6, 77, 706, '东门中路2110', '2019-06-26 16:06:59'),
(186, 6, 77, 706, '金洲路193号', '2019-06-26 16:06:59'),
(187, 6, 77, 706, '文锦北路1081号', '2019-06-26 16:07:00'),
(188, 6, 77, 706, '宝岗路41号', '2019-06-26 16:07:00'),
(189, 6, 77, 706, '太白路4009号', '2019-06-26 16:07:01'),
(190, 6, 77, 706, '国威路139号', '2019-06-26 16:07:03'),
(191, 6, 77, 706, '红桂横街11号', '2019-06-26 16:07:04'),
(192, 6, 77, 706, '爱国路3001号', '2019-06-26 16:07:05'),
(193, 6, 77, 706, '罗沙路4089号', '2019-06-26 16:07:06'),
(194, 6, 77, 706, '凤凰街18号', '2019-06-26 16:07:07'),
(195, 6, 77, 706, '洪湖二街50号', '2019-06-26 16:07:11'),
(196, 6, 77, 706, '布心路1012号', '2019-06-26 16:07:11'),
(197, 6, 77, 706, '深南东路3022号', '2019-06-26 16:07:16'),
(198, 6, 77, 706, '罗沙路4089号', '2019-06-26 16:07:17'),
(199, 6, 77, 706, '文锦北路1049号', '2019-06-26 16:07:18'),
(200, 6, 77, 706, '宝安南路3088号', '2019-06-26 16:07:16');

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_bank`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_bank` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `title` varchar(10) NOT NULL DEFAULT '' COMMENT '银行名称',
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '收款人姓名',
  `address` varchar(20) NOT NULL DEFAULT '' COMMENT '银行卡号',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='银行表';

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_cash`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_cash` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `total` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '账单金额',
  `fee` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '手续费',
  `cash_value` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '实付金额',
  `pre_balance` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '提前余额',
  `balance` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '提后余额',
  `bank_title` varchar(10) NOT NULL DEFAULT '' COMMENT '机构名称',
  `bank_name` varchar(10) NOT NULL DEFAULT '' COMMENT '收款姓名',
  `bank_address` varchar(20) NOT NULL DEFAULT '' COMMENT '收款账号',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '支付状态(0未支付,1已支付,2已取消)',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id',
  `c_time` datetime DEFAULT NULL COMMENT '添加时间',
  `f_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '财务管理id',
  `cash_sn` char(20) NOT NULL DEFAULT '' COMMENT '提现编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_client`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_client` (
  `id` int(11) unsigned NOT NULL COMMENT '主键',
  `client_id` char(32) NOT NULL DEFAULT '' COMMENT '商户id',
  `client_secret` char(64) NOT NULL DEFAULT '' COMMENT '商户秘钥',
  `timestamp` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '商户时间戳',
  `total` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id',
  `google_secret` char(16) NOT NULL DEFAULT '' COMMENT 'google秘钥',
  `p_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '通道id',
  `cash_fee` float NOT NULL DEFAULT '0' COMMENT '手续费率',
  `d_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='客户表';

--
-- 转存表中的数据 `pinduoduo_client`
--

INSERT INTO `pinduoduo_client` (`id`, `client_id`, `client_secret`, `timestamp`, `total`, `admin_uid`, `google_secret`, `p_id`, `cash_fee`, `d_id`) VALUES
(4, 'fda5fa508dbdfededf17f473b00f9cc0', 'b37f96d877c63fa36e3d20bdac1cb14edfe8973001ee0c8163cfb22f4a7ce1c6', 1561976273147, '0.00', 27, 'MCFHNLK7T7MQ54EE', 1, 0, 0),
(5, 'c478c0f30f988afe7f0b112f6c2e0d02', 'e36fd2c74d1916466106bf478d10186417c4159ba695a50a9dbbc1e5cfe62530', 0, '0.00', 29, '', 1, 2.8, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_config`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_config` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名',
  `value` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `description` varchar(10) NOT NULL DEFAULT '' COMMENT '描述'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='配置表';

--
-- 转存表中的数据 `pinduoduo_config`
--

INSERT INTO `pinduoduo_config` (`id`, `name`, `value`, `description`) VALUES
(1, 'api_key', '6EBF91857D60DEA08B18FF97BFD8C28D', '支付平台key'),
(2, 'cash_fee', '0.028', '提现手续费');

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_errors`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_errors` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id',
  `function` varchar(100) NOT NULL DEFAULT '' COMMENT '方法名',
  `param` varchar(255) NOT NULL DEFAULT '' COMMENT '参数',
  `error` varchar(50) NOT NULL DEFAULT '' COMMENT '错误信息',
  `msg` varchar(50) NOT NULL DEFAULT '' COMMENT '错误提示',
  `datetime` datetime DEFAULT NULL COMMENT '创建日期',
  `goods` varchar(255) NOT NULL DEFAULT '' COMMENT '商品链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='错误表';

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_goods`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_goods` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id',
  `stores_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '店铺id',
  `goods_name` varchar(50) NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_url` varchar(150) NOT NULL DEFAULT '' COMMENT '商品链接',
  `goods_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `sku_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '拼多多sku_id',
  `group_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '组id',
  `normal_price` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '默认价格',
  `error_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '错误次数',
  `is_store_limit` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否超库存(0否,1是)',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态(0禁用,1启用)',
  `last_use_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后使用时间',
  `ctime` datetime DEFAULT NULL COMMENT '创建时间',
  `is_upper` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否上架(0否,1是)',
  `c_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商户id',
  `d_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id'
) ENGINE=InnoDB AUTO_INCREMENT=421 DEFAULT CHARSET=utf8 COMMENT='商品表';

--
-- 转存表中的数据 `pinduoduo_goods`
--

INSERT INTO `pinduoduo_goods` (`id`, `admin_uid`, `stores_id`, `goods_name`, `goods_url`, `goods_id`, `sku_id`, `group_id`, `normal_price`, `error_count`, `is_store_limit`, `status`, `last_use_time`, `ctime`, `is_upper`, `c_id`, `d_id`) VALUES
(420, 1, 44, '夏装新款时尚韩版收腰显瘦法式少女中长款荷叶边雪纺连衣裙子女潮', 'https://mobile.yangkeduo.com/goods.html?goods_id=21978497143', 21978497143, 296930019454, 17844258392, 100, 0, 0, 1, 1562378915, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_jobs`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_jobs` (
  `id` int(11) NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_orders`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_orders` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '员工id',
  `order_sn` char(100) NOT NULL DEFAULT '''''' COMMENT '订单编号',
  `api_order_sn` char(64) NOT NULL DEFAULT '' COMMENT 'api调用者生成的订单编号',
  `ip` varchar(15) NOT NULL DEFAULT '''''' COMMENT 'ip地址',
  `fp_id` char(43) NOT NULL DEFAULT '''''' COMMENT '拼多多fp_id',
  `total` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '总价',
  `is_pay` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支付(0否,1是)',
  `notify_url` varchar(200) NOT NULL DEFAULT '''''' COMMENT '通知url',
  `is_notify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否通知(0未通知,1已通知)',
  `pay_type` tinyint(2) unsigned NOT NULL DEFAULT '9' COMMENT '支付方式(9支付宝,38微信)',
  `from_platform` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '来自哪个平台(1自行出码,2支付平台)',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态(0待付款,1待发货,2待收货,3待评价,4交易已取消)',
  `do` tinyint(1) NOT NULL DEFAULT '0',
  `mtime` datetime DEFAULT NULL COMMENT '修改日期',
  `ctime` datetime DEFAULT NULL COMMENT '创建日期',
  `g_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `c_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商户id',
  `p_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '通道id',
  `d_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id',
  `notify_status` int(11) NOT NULL DEFAULT '2',
  `notify_number` int(11) NOT NULL DEFAULT '0',
  `notify_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=181358 DEFAULT CHARSET=utf8 COMMENT='订单表';

--
-- 转存表中的数据 `pinduoduo_orders`
--

INSERT INTO `pinduoduo_orders` (`id`, `admin_uid`, `staff_id`, `order_sn`, `api_order_sn`, `ip`, `fp_id`, `total`, `is_pay`, `notify_url`, `is_notify`, `pay_type`, `from_platform`, `status`, `do`, `mtime`, `ctime`, `g_id`, `user_id`, `c_id`, `p_id`, `d_id`, `notify_status`, `notify_number`, `notify_time`) VALUES
(181357, 1, 0, '190706-219455161373115', '', '61.157.137.62', 'zH_xkYzO-NhG2SwpS7mxTR-E2rqOyPjwqZtqL4AkdZQ', 100, 0, '', 0, 38, 1, 0, 0, '2019-07-06 10:09:09', '2019-07-06 10:08:35', 420, 2905, 0, 0, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_passageway`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_passageway` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '通道名称',
  `alias` varchar(10) NOT NULL DEFAULT '' COMMENT '别称',
  `last_use_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '使用时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态(0禁用,1启用)',
  `is_default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否默认(0否,1是)'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='通道表';

--
-- 转存表中的数据 `pinduoduo_passageway`
--

INSERT INTO `pinduoduo_passageway` (`id`, `name`, `alias`, `last_use_time`, `status`, `is_default`) VALUES
(1, 'pinduoduo', '拼多多', 0, 1, 1),
(2, 'nonchanpin', '农产品', 0, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_reports`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_reports` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员id',
  `date` datetime DEFAULT NULL COMMENT '统计日期',
  `day` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '当天统计',
  `cy_day` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '海付当天统计',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '时间戳',
  `day_sum` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '每天统计总额',
  `cy_day_sum` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '海付统计总额'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='统计表';

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_stores`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_stores` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '店铺名称',
  `admin_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id',
  `store_remain_total` bigint(10) unsigned NOT NULL DEFAULT '9999999999999' COMMENT '商铺额度限制',
  `order_total` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '下单额度',
  `cur_total` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '成团额度',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态(0禁用,1启用)',
  `ctime` datetime DEFAULT NULL COMMENT '创建时间',
  `mtime` datetime DEFAULT NULL COMMENT '修改时间',
  `c_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商户id',
  `d_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id'
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COMMENT='店铺表';

--
-- 转存表中的数据 `pinduoduo_stores`
--

INSERT INTO `pinduoduo_stores` (`id`, `name`, `admin_uid`, `store_remain_total`, `order_total`, `cur_total`, `status`, `ctime`, `mtime`, `c_id`, `d_id`) VALUES
(44, '忆川居', 1, 9999999999999, 100, 0, 1, '2019-07-06 09:25:09', '2019-07-06 09:25:09', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_annex`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_annex` (
  `id` int(10) unsigned NOT NULL,
  `data_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联的数据ID',
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '类型',
  `group` varchar(100) NOT NULL DEFAULT 'sys' COMMENT '文件分组',
  `file` varchar(255) NOT NULL COMMENT '上传文件',
  `hash` varchar(64) NOT NULL COMMENT '文件hash值',
  `size` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '附件大小KB',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '使用状态(0未使用，1已使用)',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='[系统] 上传附件';

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_annex_group`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_annex_group` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '附件分组',
  `count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '附件数量',
  `size` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '附件大小kb'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='[系统] 附件分组';

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_config`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_config` (
  `id` int(10) unsigned NOT NULL,
  `system` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为系统配置(1是，0否)',
  `group` varchar(20) NOT NULL DEFAULT 'base' COMMENT '分组',
  `title` varchar(20) NOT NULL COMMENT '配置标题',
  `name` varchar(50) NOT NULL COMMENT '配置名称，由英文字母和下划线组成',
  `value` text NOT NULL COMMENT '配置值',
  `type` varchar(20) NOT NULL DEFAULT 'input' COMMENT '配置类型()',
  `options` text NOT NULL COMMENT '配置项(选项名:选项值)',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '文件上传接口',
  `tips` varchar(255) NOT NULL COMMENT '配置提示',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL COMMENT '状态',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COMMENT='[系统] 系统配置';

--
-- 转存表中的数据 `pinduoduo_system_config`
--

INSERT INTO `pinduoduo_system_config` (`id`, `system`, `group`, `title`, `name`, `value`, `type`, `options`, `url`, `tips`, `sort`, `status`, `ctime`, `mtime`) VALUES
(1, 1, 'sys', '扩展配置分组', 'config_group', '', 'array', ' ', '', '请按如下格式填写：&lt;br&gt;键值:键名&lt;br&gt;键值:键名&lt;br&gt;&lt;span style=&quot;color:#f00&quot;&gt;键值只能为英文、数字、下划线&lt;/span&gt;', 2, 1, 1492140215, 1492140215),
(13, 1, 'base', '网站域名', 'site_domain', '', 'input', '', '', '', 2, 1, 1492140215, 1492140215),
(14, 1, 'upload', '图片上传大小限制', 'upload_image_size', '0', 'input', '', '', '单位：KB，0表示不限制大小', 3, 1, 1490841797, 1491040778),
(15, 1, 'upload', '允许上传图片格式', 'upload_image_ext', 'jpg,png,gif,jpeg,ico', 'input', '', '', '多个格式请用英文逗号（,）隔开', 4, 1, 1490842130, 1491040778),
(16, 1, 'upload', '缩略图裁剪方式', 'thumb_type', '2', 'select', '1:等比例缩放\r\n2:缩放后填充\r\n3:居中裁剪\r\n4:左上角裁剪\r\n5:右下角裁剪\r\n6:固定尺寸缩放\r\n', '', '', 5, 1, 1490842450, 1491040778),
(17, 1, 'upload', '图片水印开关', 'image_watermark', '1', 'switch', '0:关闭\r\n1:开启', '', '', 6, 1, 1490842583, 1491040778),
(18, 1, 'upload', '图片水印图', 'image_watermark_pic', '', 'image', '', '', '', 7, 1, 1490842679, 1491040778),
(19, 1, 'upload', '图片水印透明度', 'image_watermark_opacity', '50', 'input', '', '', '可设置值为0~100，数字越小，透明度越高', 8, 1, 1490857704, 1491040778),
(20, 1, 'upload', '图片水印图位置', 'image_watermark_location', '9', 'select', '7:左下角\r\n1:左上角\r\n4:左居中\r\n9:右下角\r\n3:右上角\r\n6:右居中\r\n2:上居中\r\n8:下居中\r\n5:居中', '', '', 9, 1, 1490858228, 1491040778),
(21, 1, 'upload', '文件上传大小限制', 'upload_file_size', '0', 'input', '', '', '单位：KB，0表示不限制大小', 1, 1, 1490859167, 1491040778),
(22, 1, 'upload', '允许上传文件格式', 'upload_file_ext', 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,rar,zip', 'input', '', '', '多个格式请用英文逗号（,）隔开', 2, 1, 1490859246, 1491040778),
(23, 1, 'upload', '文字水印开关', 'text_watermark', '0', 'switch', '0:关闭\r\n1:开启', '', '', 10, 1, 1490860872, 1491040778),
(24, 1, 'upload', '文字水印内容', 'text_watermark_content', '', 'input', '', '', '', 11, 1, 1490861005, 1491040778),
(25, 1, 'upload', '文字水印字体', 'text_watermark_font', '', 'file', '', '', '不上传将使用系统默认字体', 12, 1, 1490861117, 1491040778),
(26, 1, 'upload', '文字水印字体大小', 'text_watermark_size', '20', 'input', '', '', '单位：px(像素)', 13, 1, 1490861204, 1491040778),
(27, 1, 'upload', '文字水印颜色', 'text_watermark_color', '#000000', 'input', '', '', '文字水印颜色，格式:#000000', 14, 1, 1490861482, 1491040778),
(28, 1, 'upload', '文字水印位置', 'text_watermark_location', '7', 'select', '7:左下角\r\n1:左上角\r\n4:左居中\r\n9:右下角\r\n3:右上角\r\n6:右居中\r\n2:上居中\r\n8:下居中\r\n5:居中', '', '', 11, 1, 1490861718, 1491040778),
(29, 1, 'upload', '缩略图尺寸', 'thumb_size', '300x300;500x500', 'input', '', '', '为空则不生成，生成 500x500 的缩略图，则填写 500x500，多个规格填写参考 300x300;500x500;800x800', 4, 1, 1490947834, 1491040778),
(30, 1, 'sys', '开发模式', 'app_debug', '1', 'switch', '0:关闭\r\n1:开启', '', '&lt;strong class=&quot;red&quot;&gt;生产环境下一定要关闭此配置&lt;/strong&gt;', 3, 1, 1491005004, 1492093874),
(31, 1, 'sys', '页面Trace', 'app_trace', '0', 'switch', '0:关闭\r\n1:开启', '', '&lt;strong class=&quot;red&quot;&gt;生产环境下一定要关闭此配置&lt;/strong&gt;', 4, 1, 1491005081, 1492093874),
(33, 1, 'sys', '富文本编辑器', 'editor', 'umeditor', 'select', 'ueditor:UEditor\r\numeditor:UMEditor\r\nkindeditor:KindEditor\r\nckeditor:CKEditor', '', '', 0, 1, 1491142648, 1492140215),
(35, 1, 'databases', '备份目录', 'backup_path', './backup/database/', 'input', '', '', '数据库备份路径,路径必须以 / 结尾', 0, 1, 1491881854, 1491965974),
(36, 1, 'databases', '备份分卷大小', 'part_size', '20971520', 'input', '', '', '用于限制压缩后的分卷最大长度。单位：B；建议设置20M', 0, 1, 1491881975, 1491965974),
(37, 1, 'databases', '备份压缩开关', 'compress', '1', 'switch', '0:关闭\r\n1:开启', '', '压缩备份文件需要PHP环境支持gzopen,gzwrite函数', 0, 1, 1491882038, 1491965974),
(38, 1, 'databases', '备份压缩级别', 'compress_level', '4', 'radio', '1:最低\r\n4:一般\r\n9:最高', '', '数据库备份文件的压缩级别，该配置在开启压缩时生效', 0, 1, 1491882154, 1491965974),
(39, 1, 'base', '网站状态', 'site_status', '1', 'switch', '0:关闭\r\n1:开启', '', '站点关闭后将不能访问，后台可正常登录', 1, 1, 1492049460, 1494690024),
(40, 1, 'sys', '后台管理路径', 'admin_path', 'admin.php', 'input', '', '', '必须以.php为后缀', 1, 1, 1492139196, 1492140215),
(41, 1, 'base', '网站标题', 'site_title', 'HisiPHP 开源后台管理框架', 'input', '', '', '网站标题是体现一个网站的主旨，要做到主题突出、标题简洁、连贯等特点，建议不超过28个字', 6, 1, 1492502354, 1494695131),
(42, 1, 'base', '网站关键词', 'site_keywords', 'hisiphp,hisiphp框架,php开源框架', 'input', '', '', '网页内容所包含的核心搜索关键词，多个关键字请用英文逗号&quot;,&quot;分隔', 7, 1, 1494690508, 1494690780),
(43, 1, 'base', '网站描述', 'site_description', '', 'textarea', '', '', '网页的描述信息，搜索引擎采纳后，作为搜索结果中的页面摘要显示，建议不超过80个字', 8, 1, 1494690669, 1494691075),
(44, 1, 'base', 'ICP备案信息', 'site_icp', '', 'input', '', '', '请填写ICP备案号，用于展示在网站底部，ICP备案官网：&lt;a href=&quot;http://www.miibeian.gov.cn&quot; target=&quot;_blank&quot;&gt;http://www.miibeian.gov.cn&lt;/a&gt;', 9, 1, 1494691721, 1494692046),
(45, 1, 'base', '站点统计代码', 'site_statis', '', 'textarea', '', '', '第三方流量统计代码，前台调用时请先用 htmlspecialchars_decode函数转义输出', 10, 1, 1494691959, 1494694797),
(46, 1, 'base', '网站名称', 'site_name', 'HisiPHP', 'input', '', '', '将显示在浏览器窗口标题等位置', 3, 1, 1494692103, 1494694680),
(47, 1, 'base', '网站LOGO', 'site_logo', '', 'image', '', '', '网站LOGO图片', 4, 1, 1494692345, 1494693235),
(48, 1, 'base', '网站图标', 'site_favicon', '', 'image', '', '/system/annex/favicon', '又叫网站收藏夹图标，它显示位于浏览器的地址栏或者标题前面，&lt;strong class=&quot;red&quot;&gt;.ico格式&lt;/strong&gt;，&lt;a href=&quot;https://www.baidu.com/s?ie=UTF-8&amp;wd=favicon&quot; target=&quot;_blank&quot;&gt;点此了解网站图标&lt;/a&gt;', 5, 1, 1494692781, 1494693966),
(49, 1, 'base', '手机网站', 'wap_site_status', '1', 'switch', '0:关闭\r\n1:开启', '', '如果有手机网站，请设置为开启状态，否则只显示PC网站', 2, 1, 1498405436, 1498405436),
(50, 1, 'sys', '云端推送', 'cloud_push', '0', 'switch', '0:关闭\r\n1:开启', '', '关闭之后，无法通过云端推送安装扩展', 5, 1, 1504250320, 1504250320),
(51, 1, 'base', '手机网站域名', 'wap_domain', '', 'input', '', '', '手机访问将自动跳转至此域名', 2, 1, 1504304776, 1504304837),
(52, 1, 'sys', '多语言支持', 'multi_language', '0', 'switch', '0:关闭\r\n1:开启', '', '开启后你可以自由上传多种语言包', 6, 1, 1506532211, 1506532211),
(53, 1, 'sys', '后台白名单验证', 'admin_whitelist_verify', '0', 'switch', '0:禁用\r\n1:启用', '', '禁用后不存在的菜单节点将不在提示', 7, 1, 1542012232, 1542012321),
(54, 1, 'sys', '系统日志保留', 'system_log_retention', '30', 'input', '', '', '单位天，系统将自动清除 ? 天前的系统日志', 8, 1, 1542013958, 1542014158);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_hook`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_hook` (
  `id` int(10) unsigned NOT NULL,
  `system` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '系统插件',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子名称',
  `source` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子来源[plugins.插件名，module.模块名]',
  `intro` varchar(200) NOT NULL DEFAULT '' COMMENT '钩子简介',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='[系统] 钩子表';

--
-- 转存表中的数据 `pinduoduo_system_hook`
--

INSERT INTO `pinduoduo_system_hook` (`id`, `system`, `name`, `source`, `intro`, `status`, `ctime`, `mtime`) VALUES
(1, 1, 'system_admin_index', '', '后台首页', 1, 1490885108, 1490885108),
(2, 1, 'system_admin_tips', '', '后台所有页面提示', 1, 1490713165, 1490885137),
(3, 1, 'system_annex_upload', '', '附件上传钩子，可扩展上传到第三方存储', 1, 1490884242, 1490885121),
(4, 1, 'system_member_login', '', '会员登陆成功之后的动作', 1, 1490885108, 1490885108),
(5, 1, 'system_member_register', '', '会员注册成功后的动作', 1, 1512610518, 1512610518);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_hook_plugins`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_hook_plugins` (
  `id` int(11) unsigned NOT NULL,
  `hook` varchar(32) NOT NULL COMMENT '钩子id',
  `plugins` varchar(32) NOT NULL COMMENT '插件标识',
  `ctime` int(11) unsigned NOT NULL DEFAULT '0',
  `mtime` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='[系统] 钩子-插件对应表';

--
-- 转存表中的数据 `pinduoduo_system_hook_plugins`
--

INSERT INTO `pinduoduo_system_hook_plugins` (`id`, `hook`, `plugins`, `ctime`, `mtime`, `sort`, `status`) VALUES
(1, 'system_admin_index', 'hisiphp', 1509380301, 1509380301, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_language`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_language` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '语言包名称',
  `code` varchar(20) NOT NULL DEFAULT '' COMMENT '编码',
  `locale` varchar(255) NOT NULL DEFAULT '' COMMENT '本地浏览器语言编码',
  `icon` varchar(30) NOT NULL DEFAULT '' COMMENT '图标',
  `pack` varchar(100) NOT NULL DEFAULT '' COMMENT '上传的语言包',
  `sort` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='[系统] 语言包';

--
-- 转存表中的数据 `pinduoduo_system_language`
--

INSERT INTO `pinduoduo_system_language` (`id`, `name`, `code`, `locale`, `icon`, `pack`, `sort`, `status`) VALUES
(1, '简体中文', 'zh-cn', 'zh-CN,zh-CN.UTF-8,zh-cn', '', '1', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_log`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_log` (
  `id` int(11) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `url` varchar(200) DEFAULT '',
  `param` text,
  `remark` varchar(255) DEFAULT '',
  `count` int(10) unsigned NOT NULL DEFAULT '1',
  `ip` varchar(128) DEFAULT '',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8 COMMENT='[系统] 操作日志';

--
-- 转存表中的数据 `pinduoduo_system_log`
--

INSERT INTO `pinduoduo_system_log` (`id`, `uid`, `title`, `url`, `param`, `remark`, `count`, `ip`, `ctime`, `mtime`) VALUES
(231, 1, '后台首页', '/admin.php/system/index/index.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376021, 1562376021),
(232, 1, '个人信息设置', '/admin.php/system/user/info.html', '[]', '浏览数据', 2, '61.157.137.62', 1562376028, 1562376048),
(233, 1, '个人信息设置', '/admin.php/system/user/info.html', '{"username":"admin","nick":"\\u8d85\\u7ea7\\u7ba1\\u7406\\u5458","password":"123456","password_confirm":"123456","email":"123456@qq.com","mobile":"15005124985","__token__":"cd63474bbc6df32eb6384d694a0a6428","id":""}', '保存数据', 2, '61.157.137.62', 1562376038, 1562376045),
(234, 1, '商户中心', '/admin.php/system/pinduoduo/clients.html', '[]', '浏览数据', 9, '61.157.137.62', 1562376053, 1562376281),
(235, 1, '删除管理员', '/admin.php/system/user/deluser.html?id=28', '{"id":"28"}', '浏览数据', 1, '61.157.137.62', 1562376064, 1562376064),
(236, 1, '删除管理员', '/admin.php/system/user/deluser.html?id=27', '{"id":"27"}', '浏览数据', 1, '61.157.137.62', 1562376066, 1562376066),
(237, 1, '添加快捷菜单', '/admin.php/system/menu/quick.html?id=182', '{"id":"182"}', '浏览数据', 1, '61.157.137.62', 1562376067, 1562376067),
(238, 1, '基础信息', '/admin.php/system/pinduoduo/infos.html', '[]', '浏览数据', 2, '61.157.137.62', 1562376083, 1562378494),
(239, 1, '数据统计', '/admin.php/system/pinduoduo/reports.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376090, 1562376090),
(240, 1, '错误日志', '/admin.php/system/pinduoduo/errors.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376091, 1562376091),
(241, 1, '错误日志', '/admin.php/system/pinduoduo/errors.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 1, '61.157.137.62', 1562376092, 1562376092),
(242, 1, '应用市场', '/admin.php/system/store/index.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376099, 1562376099),
(243, 1, '应用市场', '/admin.php/system/store/index.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 1, '61.157.137.62', 1562376100, 1562376100),
(244, 1, '系统管理员', '/admin.php/system/user/index.html', '[]', '浏览数据', 3, '61.157.137.62', 1562376233, 1562376273),
(245, 1, '系统管理员', '/admin.php/system/user/index.html?page=1&limit=20', '{"page":"1","limit":"20"}', '浏览数据', 3, '61.157.137.62', 1562376233, 1562376273),
(246, 1, '添加管理员', '/admin.php/system/user/adduser.html?hisi_iframe=yes', '{"hisi_iframe":"yes"}', '浏览数据', 1, '61.157.137.62', 1562376235, 1562376235),
(247, 1, '添加管理员', '/admin.php/system/user/adduser.html', '{"role_id":"6","username":"test","nick":"test","password":"123456","password_confirm":"123456","email":"505052654@qq.com","mobile":"15220868478","iframe":"0","status":"1","__token__":"dd5ff959a5d1c92a58c144174cc81224","id":""}', '保存数据', 1, '61.157.137.62', 1562376257, 1562376257),
(248, 1, '修改管理员', '/admin.php/system/user/edituser.html?id=29', '{"id":"29"}', '浏览数据', 1, '61.157.137.62', 1562376275, 1562376275),
(249, 1, '店铺列表', '/admin.php/system/pinduoduo/stores.html', '[]', '浏览数据', 3, '61.157.137.62', 1562376292, 1562376948),
(250, 1, '店铺列表', '/admin.php/system/pinduoduo/stores.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 3, '61.157.137.62', 1562376292, 1562376949),
(251, 1, '添加店铺', '/admin.php/system/pinduoduo/stores_add.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376299, 1562376299),
(252, 1, '添加店铺', '/admin.php/system/pinduoduo/stores_add.html', '{"name":"\\u5fc6\\u5ddd\\u5c45"}', '保存数据', 1, '61.157.137.62', 1562376309, 1562376309),
(253, 1, '帐号管理', '/admin.php/system/pinduoduo/users.html', '[]', '浏览数据', 2, '61.157.137.62', 1562376316, 1562376597),
(254, 1, '帐号管理', '/admin.php/system/pinduoduo/users.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 2, '61.157.137.62', 1562376316, 1562376598),
(255, 1, '添加帐号', '/admin.php/system/pinduoduo/users_add.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376321, 1562376321),
(256, 1, '添加帐号', '/admin.php/system/pinduoduo/users_add.html', '{"phone":"13981187119","code":"403639"}', '保存数据', 1, '61.157.137.62', 1562376565, 1562376565),
(257, 1, '未加入系统菜单', '/admin.php/system/pinduoduo/getaddresstpl.html', '{"phone":"13981187119","region_id":"2776"}', '保存数据', 3, '61.157.137.62', 1562376575, 1562376580),
(258, 1, '未加入系统菜单', '/admin.php/system/pinduoduo/saveaddress.html', '{"phone":"13981187119","address_name":"\\u9694\\u58c1\\u8001\\u5434","address_province":"26","address_city":"325","address_district":"2776","address_concret":"\\u51b0\\u6c5f\\u4e2d\\u8def"}', '保存数据', 1, '61.157.137.62', 1562376597, 1562376597),
(259, 1, '系统设置', '/admin.php/system/system/index.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376759, 1562376759),
(260, 1, '系统配置', '/admin.php/system/system/index.html?group=sys', '{"group":"sys"}', '浏览数据', 1, '61.157.137.62', 1562376764, 1562376764),
(261, 1, '上传配置', '/admin.php/system/system/index.html?group=upload', '{"group":"upload"}', '浏览数据', 1, '61.157.137.62', 1562376766, 1562376766),
(262, 1, '数据库配置', '/admin.php/system/system/index.html?group=databases', '{"group":"databases"}', '浏览数据', 1, '61.157.137.62', 1562376767, 1562376767),
(263, 1, '配置管理', '/admin.php/system/config/index.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376770, 1562376770),
(264, 1, '配置管理', '/admin.php/system/config/index.html?group=&page=1&limit=20', '{"group":"","page":"1","limit":"20"}', '浏览数据', 1, '61.157.137.62', 1562376770, 1562376770),
(265, 1, '配置管理', '/admin.php/system/config/index.html?group=&page=2&limit=20', '{"group":"","page":"2","limit":"20"}', '浏览数据', 1, '61.157.137.62', 1562376794, 1562376794),
(266, 1, '配置管理', '/admin.php/system/config/index.html?group=&page=3&limit=20', '{"group":"","page":"3","limit":"20"}', '浏览数据', 1, '61.157.137.62', 1562376796, 1562376796),
(267, 1, '申请提现', '/admin.php/system/pinduoduo/cash_add.html', '[]', '浏览数据', 2, '61.157.137.62', 1562376810, 1562376819),
(268, 1, '结算管理', '/admin.php/system/pinduoduo/settlement.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376813, 1562376813),
(269, 1, '结算管理', '/admin.php/system/pinduoduo/settlement.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 1, '61.157.137.62', 1562376814, 1562376814),
(270, 1, '我的结算', '/admin.php/system/pinduoduo/my_settlement.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376814, 1562376814),
(271, 1, '我的结算', '/admin.php/system/pinduoduo/my_settlement.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 1, '61.157.137.62', 1562376815, 1562376815),
(272, 1, '我的代收银行', '/admin.php/system/pinduoduo/bank.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376816, 1562376816),
(273, 1, '我的代收银行', '/admin.php/system/pinduoduo/bank.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 1, '61.157.137.62', 1562376816, 1562376816),
(274, 1, '添加代收银行', '/admin.php/system/pinduoduo/bank_add.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376817, 1562376817),
(275, 1, '绑定Google验证器', '/admin.php/system/pinduoduo/google_bind.html', '[]', '浏览数据', 1, '61.157.137.62', 1562376818, 1562376818),
(276, 1, '店铺管理', '/admin.php/system/pinduoduo/goods.html', '[]', '浏览数据', 4, '61.157.137.62', 1562376820, 1562378905),
(277, 1, '店铺管理', '/admin.php/system/pinduoduo/goods.html?page=1&limit=10', '{"page":"1","limit":"10"}', '浏览数据', 4, '61.157.137.62', 1562376821, 1562378905),
(278, 1, '添加商品', '/admin.php/system/pinduoduo/goods_add.html', '[]', '浏览数据', 5, '61.157.137.62', 1562376822, 1562378900),
(279, 1, '未加入系统菜单', '/admin.php/system/pinduoduo/get_goods_info.html', '{"stores_id":"44","goods_url":"https:\\/\\/mobile.yangkeduo.com\\/goods.html?goods_id=21978497143"}', '保存数据', 3, '61.157.137.62', 1562378449, 1562378904),
(280, 1, '未加入系统菜单', '/admin.php/system/pinduoduo/goods_status.html', '{"id":"419","val":"1"}', '保存数据', 2, '61.157.137.62', 1562378825, 1562378826);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_menu`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_menu` (
  `id` int(10) unsigned NOT NULL,
  `uid` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '管理员ID(快捷菜单专用)',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `module` varchar(20) NOT NULL COMMENT '模块名或插件名，插件名格式:plugins.插件名',
  `title` varchar(20) NOT NULL COMMENT '菜单标题',
  `icon` varchar(80) NOT NULL DEFAULT 'aicon ai-shezhi' COMMENT '菜单图标',
  `url` varchar(200) NOT NULL COMMENT '链接地址(模块/控制器/方法)',
  `param` varchar(200) NOT NULL DEFAULT '' COMMENT '扩展参数',
  `target` varchar(20) NOT NULL DEFAULT '_self' COMMENT '打开方式(_blank,_self)',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `debug` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '开发模式可见',
  `system` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为系统菜单，系统菜单不可删除',
  `nav` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否为菜单显示，1显示0不显示',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态1显示，0隐藏',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COMMENT='[系统] 管理菜单';

--
-- 转存表中的数据 `pinduoduo_system_menu`
--

INSERT INTO `pinduoduo_system_menu` (`id`, `uid`, `pid`, `module`, `title`, `icon`, `url`, `param`, `target`, `sort`, `debug`, `system`, `nav`, `status`, `ctime`) VALUES
(1, 0, 0, 'system', '首页', '', 'system/index', '', '_self', 0, 0, 1, 1, 1, 1490315067),
(2, 0, 0, 'system', '系统', '', 'system/system', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(3, 0, 0, 'system', '插件', 'aicon ai-shezhi', 'system/plugins', '', '_self', 2, 0, 1, 1, 0, 1490315067),
(4, 0, 1, 'system', '快捷菜单', 'aicon ai-caidan', 'system/quick', '', '_self', 0, 0, 1, 1, 1, 1490315067),
(5, 0, 3, 'system', '插件列表', 'aicon ai-mokuaiguanli', 'system/plugins', '', '_self', 0, 0, 1, 1, 0, 1490315067),
(6, 0, 2, 'system', '系统基础', 'aicon ai-gongneng', 'system/system', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(7, 0, 4, 'system', '预留占位', '', '', '', '_self', 0, 0, 1, 1, 0, 1490315067),
(8, 0, 2, 'system', '系统扩展', 'aicon ai-shezhi', 'system/extend', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(9, 0, 4, 'system', '预留占位', '', '', '', '_self', 4, 0, 1, 1, 0, 1490315067),
(10, 0, 6, 'system', '系统设置', 'aicon ai-icon01', 'system/system/index', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(11, 0, 6, 'system', '配置管理', 'aicon ai-peizhiguanli', 'system/config/index', '', '_self', 2, 1, 1, 1, 1, 1490315067),
(12, 0, 6, 'system', '系统菜单', 'aicon ai-systemmenu', 'system/menu/index', '', '_self', 3, 1, 1, 1, 1, 1490315067),
(13, 0, 6, 'system', '管理员角色', '', 'system/user/role', '', '_self', 4, 0, 1, 0, 1, 1490315067),
(14, 0, 6, 'system', '系统管理员', 'aicon ai-tubiao05', 'system/user/index', '', '_self', 5, 0, 1, 1, 1, 1490315067),
(15, 0, 6, 'system', '系统日志', 'aicon ai-xitongrizhi-tiaoshi', 'system/log/index', '', '_self', 7, 0, 1, 1, 1, 1490315067),
(16, 0, 6, 'system', '附件管理', '', 'system/annex/index', '', '_self', 8, 0, 1, 0, 1, 1490315067),
(17, 0, 8, 'system', '本地模块', 'aicon ai-mokuaiguanli1', 'system/module/index', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(18, 0, 8, 'system', '本地插件', 'aicon ai-chajianguanli', 'system/plugins/index', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(19, 0, 8, 'system', '插件钩子', 'aicon ai-icon-test', 'system/hook/index', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(20, 0, 4, 'system', '预留占位', '', '', '', '_self', 1, 0, 1, 1, 0, 1490315067),
(21, 0, 4, 'system', '预留占位', '', '', '', '_self', 2, 0, 1, 1, 0, 1490315067),
(22, 0, 4, 'system', '预留占位', '', '', '', '_self', 1, 0, 1, 1, 0, 1490315067),
(23, 0, 4, 'system', '预留占位', '', '', '', '_self', 2, 0, 1, 1, 0, 1490315067),
(24, 0, 4, 'system', '后台首页', '', 'system/index/index', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(25, 0, 4, 'system', '清空缓存', '', 'system/index/clear', '', '_self', 2, 0, 1, 0, 1, 1490315067),
(26, 0, 12, 'system', '添加菜单', '', 'system/menu/add', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(27, 0, 12, 'system', '修改菜单', '', 'system/menu/edit', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(28, 0, 12, 'system', '删除菜单', '', 'system/menu/del', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(29, 0, 12, 'system', '状态设置', '', 'system/menu/status', '', '_self', 4, 0, 1, 1, 1, 1490315067),
(30, 0, 12, 'system', '排序设置', '', 'system/menu/sort', '', '_self', 5, 0, 1, 1, 1, 1490315067),
(31, 0, 12, 'system', '添加快捷菜单', '', 'system/menu/quick', '', '_self', 6, 0, 1, 1, 1, 1490315067),
(32, 0, 12, 'system', '导出菜单', '', 'system/menu/export', '', '_self', 7, 0, 1, 1, 1, 1490315067),
(33, 0, 13, 'system', '添加角色', '', 'system/user/addrole', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(34, 0, 13, 'system', '修改角色', '', 'system/user/editrole', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(35, 0, 13, 'system', '删除角色', '', 'system/user/delrole', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(36, 0, 13, 'system', '状态设置', '', 'system/user/statusRole', '', '_self', 4, 0, 1, 1, 1, 1490315067),
(37, 0, 14, 'system', '添加管理员', '', 'system/user/adduser', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(38, 0, 14, 'system', '修改管理员', '', 'system/user/edituser', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(39, 0, 14, 'system', '删除管理员', '', 'system/user/deluser', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(40, 0, 14, 'system', '状态设置', '', 'system/user/status', '', '_self', 4, 0, 1, 0, 1, 1490315067),
(41, 0, 142, 'system', '个人信息设置', '', 'system/user/info', '', '_self', 0, 0, 0, 0, 1, 1490315067),
(42, 0, 18, 'system', '安装插件', '', 'system/plugins/install', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(43, 0, 18, 'system', '卸载插件', '', 'system/plugins/uninstall', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(44, 0, 18, 'system', '删除插件', '', 'system/plugins/del', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(45, 0, 18, 'system', '状态设置', '', 'system/plugins/status', '', '_self', 4, 0, 1, 1, 1, 1490315067),
(46, 0, 18, 'system', '生成插件', '', 'system/plugins/design', '', '_self', 5, 0, 1, 1, 1, 1490315067),
(47, 0, 18, 'system', '运行插件', '', 'system/plugins/run', '', '_self', 6, 0, 1, 1, 1, 1490315067),
(48, 0, 18, 'system', '更新插件', '', 'system/plugins/update', '', '_self', 7, 0, 1, 1, 1, 1490315067),
(49, 0, 18, 'system', '插件配置', '', 'system/plugins/setting', '', '_self', 8, 0, 1, 1, 1, 1490315067),
(50, 0, 19, 'system', '添加钩子', '', 'system/hook/add', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(51, 0, 19, 'system', '修改钩子', '', 'system/hook/edit', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(52, 0, 19, 'system', '删除钩子', '', 'system/hook/del', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(53, 0, 19, 'system', '状态设置', '', 'system/hook/status', '', '_self', 4, 0, 1, 1, 1, 1490315067),
(54, 0, 19, 'system', '插件排序', '', 'system/hook/sort', '', '_self', 5, 0, 1, 1, 1, 1490315067),
(55, 0, 11, 'system', '添加配置', '', 'system/config/add', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(56, 0, 11, 'system', '修改配置', '', 'system/config/edit', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(57, 0, 11, 'system', '删除配置', '', 'system/config/del', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(58, 0, 11, 'system', '状态设置', '', 'system/config/status', '', '_self', 4, 0, 1, 1, 1, 1490315067),
(59, 0, 11, 'system', '排序设置', '', 'system/config/sort', '', '_self', 5, 0, 1, 1, 1, 1490315067),
(60, 0, 10, 'system', '基础配置', '', 'system/system/index', 'group=base', '_self', 1, 0, 1, 1, 1, 1490315067),
(61, 0, 10, 'system', '系统配置', '', 'system/system/index', 'group=sys', '_self', 2, 0, 1, 1, 1, 1490315067),
(62, 0, 10, 'system', '上传配置', '', 'system/system/index', 'group=upload', '_self', 3, 0, 1, 1, 1, 1490315067),
(63, 0, 10, 'system', '开发配置', '', 'system/system/index', 'group=develop', '_self', 4, 0, 1, 1, 1, 1490315067),
(64, 0, 17, 'system', '生成模块', '', 'system/module/design', '', '_self', 6, 1, 1, 1, 1, 1490315067),
(65, 0, 17, 'system', '安装模块', '', 'system/module/install', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(66, 0, 17, 'system', '卸载模块', '', 'system/module/uninstall', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(67, 0, 17, 'system', '状态设置', '', 'system/module/status', '', '_self', 3, 0, 1, 1, 1, 1490315067),
(68, 0, 17, 'system', '设置默认模块', '', 'system/module/setdefault', '', '_self', 4, 0, 1, 1, 1, 1490315067),
(69, 0, 17, 'system', '删除模块', '', 'system/module/del', '', '_self', 5, 0, 1, 1, 1, 1490315067),
(70, 0, 4, 'system', '预留占位', '', '', '', '_self', 1, 0, 1, 1, 0, 1490315067),
(71, 0, 4, 'system', '预留占位', '', '', '', '_self', 2, 0, 1, 1, 0, 1490315067),
(72, 0, 4, 'system', '预留占位', '', '', '', '_self', 3, 0, 1, 1, 0, 1490315067),
(73, 0, 4, 'system', '预留占位', '', '', '', '_self', 4, 0, 1, 1, 0, 1490315067),
(74, 0, 4, 'system', '预留占位', '', '', '', '_self', 5, 0, 1, 1, 0, 1490315067),
(75, 0, 4, 'system', '预留占位', '', '', '', '_self', 0, 0, 1, 1, 0, 1490315067),
(76, 0, 4, 'system', '预留占位', '', '', '', '_self', 0, 0, 1, 1, 0, 1490315067),
(77, 0, 4, 'system', '预留占位', '', '', '', '_self', 0, 0, 1, 1, 0, 1490315067),
(78, 0, 16, 'system', '附件上传', '', 'system/annex/upload', '', '_self', 1, 0, 1, 1, 1, 1490315067),
(79, 0, 16, 'system', '删除附件', '', 'system/annex/del', '', '_self', 2, 0, 1, 1, 1, 1490315067),
(80, 0, 8, 'system', '框架升级', 'aicon ai-iconfontshengji', 'system/upgrade/index', '', '_self', 4, 0, 1, 1, 1, 1491352728),
(81, 0, 80, 'system', '获取升级列表', '', 'system/upgrade/lists', '', '_self', 0, 0, 1, 1, 1, 1491353504),
(82, 0, 80, 'system', '安装升级包', '', 'system/upgrade/install', '', '_self', 0, 0, 1, 1, 1, 1491353568),
(83, 0, 80, 'system', '下载升级包', '', 'system/upgrade/download', '', '_self', 0, 0, 1, 1, 1, 1491395830),
(84, 0, 6, 'system', '数据库管理', 'aicon ai-shujukuguanli', 'system/database/index', '', '_self', 6, 0, 1, 1, 1, 1491461136),
(85, 0, 84, 'system', '备份数据库', '', 'system/database/export', '', '_self', 0, 0, 1, 1, 1, 1491461250),
(86, 0, 84, 'system', '恢复数据库', '', 'system/database/import', '', '_self', 0, 0, 1, 1, 1, 1491461315),
(87, 0, 84, 'system', '优化数据库', '', 'system/database/optimize', '', '_self', 0, 0, 1, 1, 1, 1491467000),
(88, 0, 84, 'system', '删除备份', '', 'system/database/del', '', '_self', 0, 0, 1, 1, 1, 1491467058),
(89, 0, 84, 'system', '修复数据库', '', 'system/database/repair', '', '_self', 0, 0, 1, 1, 1, 1491880879),
(90, 0, 21, 'system', '设置默认等级', '', 'system/member/setdefault', '', '_self', 0, 0, 1, 1, 1, 1491966585),
(91, 0, 10, 'system', '数据库配置', '', 'system/system/index', 'group=databases', '_self', 5, 0, 1, 0, 1, 1492072213),
(92, 0, 17, 'system', '模块打包', '', 'system/module/package', '', '_self', 7, 0, 1, 1, 1, 1492134693),
(93, 0, 18, 'system', '插件打包', '', 'system/plugins/package', '', '_self', 0, 0, 1, 1, 1, 1492134743),
(94, 0, 17, 'system', '主题管理', '', 'system/module/theme', '', '_self', 8, 0, 1, 1, 1, 1492433470),
(95, 0, 17, 'system', '设置默认主题', '', 'system/module/setdefaulttheme', '', '_self', 9, 0, 1, 1, 1, 1492433618),
(96, 0, 17, 'system', '删除主题', '', 'system/module/deltheme', '', '_self', 10, 0, 1, 1, 1, 1490315067),
(97, 0, 6, 'system', '语言包管理', '', 'system/language/index', '', '_self', 9, 0, 1, 0, 1, 1490315067),
(98, 0, 97, 'system', '添加语言包', '', 'system/language/add', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(99, 0, 97, 'system', '修改语言包', '', 'system/language/edit', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(100, 0, 97, 'system', '删除语言包', '', 'system/language/del', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(101, 0, 97, 'system', '排序设置', '', 'system/language/sort', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(102, 0, 97, 'system', '状态设置', '', 'system/language/status', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(103, 0, 16, 'system', '收藏夹图标上传', '', 'system/annex/favicon', '', '_self', 3, 0, 1, 0, 1, 1490315067),
(104, 0, 17, 'system', '导入模块', '', 'system/module/import', '', '_self', 11, 0, 1, 0, 1, 1490315067),
(105, 0, 4, 'system', '后台首页', '', 'system/index/welcome', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(106, 0, 4, 'system', '布局切换', '', 'system/user/iframe', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(107, 0, 15, 'system', '删除日志', '', 'system/log/del', 'table=admin_log', '_self', 100, 0, 1, 0, 1, 1490315067),
(108, 0, 15, 'system', '清空日志', '', 'system/log/clear', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(109, 0, 17, 'system', '编辑模块', '', 'system/module/edit', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(110, 0, 17, 'system', '模块图标上传', '', 'system/module/icon', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(111, 0, 18, 'system', '导入插件', '', 'system/plugins/import', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(112, 0, 4, 'system', '钩子插件状态', '', 'system/hook/hookPluginsStatus', '', '_self', 100, 0, 1, 0, 0, 1490315067),
(113, 0, 4, 'system', '设置主题', '', 'system/user/setTheme', '', '_self', 100, 0, 1, 0, 1, 1490315067),
(114, 0, 8, 'system', '应用市场', 'aicon ai-app-store', 'system/store/index', '', '_self', 0, 0, 1, 1, 1, 1490315067),
(115, 0, 114, 'system', '安装应用', '', 'system/store/install', '', '_self', 0, 0, 1, 1, 1, 1490315067),
(116, 0, 21, 'system', '重置密码', '', 'system/member/resetPwd', '', '_self', 6, 0, 1, 1, 1, 1490315067),
(117, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(118, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(119, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(120, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(121, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(122, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(123, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(124, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(125, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(126, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(127, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(128, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(129, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(130, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(131, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(132, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(133, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(134, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(135, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(136, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(137, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(138, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(139, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(140, 0, 4, 'system', '预留占位', '', '', '', '_self', 100, 0, 1, 1, 0, 1490315067),
(141, 0, 0, 'system', '拼多多', '', 'system/pinduoduo', '', '_self', 0, 0, 0, 1, 1, 1556712275),
(142, 0, 141, 'system', '常用菜单', 'aicon ai-shouye', 'system/pingduoduo/infos', '', '_self', 0, 0, 0, 1, 1, 1556713437),
(143, 0, 142, 'system', '基础信息', 'aicon ai-doubleleft', 'system/pinduoduo/infos', '', '_self', 0, 0, 0, 1, 1, 1556713551),
(144, 0, 142, 'system', '数据统计', 'aicon ai-shouyeshouye', 'system/pinduoduo/reports', '', '_self', 0, 0, 0, 1, 1, 1556713629),
(145, 0, 142, 'system', '错误日志', 'aicon ai-cha', 'system/pinduoduo/errors', '', '_self', 0, 0, 0, 1, 1, 1556713661),
(146, 0, 141, 'system', '订单管理', 'aicon ai-shujukuguanli', 'system/pinduoduo/orders', '', '_self', 0, 0, 0, 1, 1, 1556713709),
(147, 0, 146, 'system', '订单列表', 'aicon ai-shujukuguanli', 'system/pinduoduo/orders', '', '_self', 0, 0, 0, 1, 1, 1556713879),
(148, 0, 146, 'system', '售后订单', 'aicon ai-chajianguanli', 'system/pinduoduo/after_sales', '', '_self', 0, 0, 0, 1, 1, 1556713923),
(149, 0, 141, 'system', '店铺管理', 'aicon ai-caidan', 'system/pinduoduo/goods', '', '_self', 0, 0, 0, 1, 1, 1556713976),
(150, 0, 149, 'system', '商品列表', 'aicon ai-caidan', 'system/pinduoduo/goods', '', '_self', 0, 0, 0, 1, 1, 1556714012),
(151, 0, 149, 'system', '添加商品', 'aicon ai-tianjia', 'system/pinduoduo/goods_add', '', '_self', 0, 0, 0, 1, 1, 1556714320),
(152, 0, 149, 'system', '店铺列表', 'aicon ai-mokuaiguanli1', 'system/pinduoduo/stores', '', '_self', 0, 0, 0, 1, 1, 1556715287),
(153, 0, 149, 'system', '添加店铺', 'aicon ai-tianjia', 'system/pinduoduo/stores_add', '', '_self', 0, 0, 0, 1, 1, 1556715335),
(154, 0, 141, 'system', '帐号管理', 'aicon ai-huiyuanliebiao', 'system/pinduoduo/users', '', '_self', 0, 0, 0, 1, 1, 1556715401),
(155, 0, 154, 'system', '帐号列表', 'aicon ai-huiyuanliebiao', 'system/pinduoduo/users', '', '_self', 0, 0, 0, 1, 1, 1556715451),
(156, 0, 154, 'system', '公共帐号', 'aicon ai-gongneng', 'system/pinduoduo/users_public', '', '_self', 0, 0, 0, 1, 1, 1556715492),
(157, 0, 154, 'system', '添加帐号', 'aicon ai-tianjia', 'system/pinduoduo/users_add', '', '_self', 0, 0, 0, 1, 1, 1556715527),
(158, 0, 141, 'system', '员工管理', 'aicon ai-huiyuandengji', 'system/pinduoduo/staffs', '', '_self', 0, 0, 0, 1, 0, 1556715576),
(159, 0, 158, 'system', '员工列表', 'aicon ai-huiyuandengji', 'system/pinduoduo/staffs', '', '_self', 0, 0, 0, 1, 0, 1556715730),
(160, 0, 158, 'system', '添加员工', 'aicon ai-tianjia', 'system/pinduoduo/staffs_add', '', '_self', 0, 0, 0, 1, 0, 1556715767),
(161, 0, 141, 'system', '提现管理', 'typcn typcn-anchor', 'system/pinduoduo/cash', '', '_self', 0, 0, 0, 1, 1, 1557391742),
(162, 0, 161, 'system', '申请提现', 'aicon ai-mokuaiguanli', 'system/pinduoduo/cash_add', '', '_self', 0, 0, 0, 1, 1, 1557392141),
(163, 0, 161, 'system', '结算管理', 'aicon ai-chajianguanli', 'system/pinduoduo/settlement', '', '_self', 0, 0, 0, 1, 1, 1557392282),
(164, 0, 161, 'system', '我的结算', 'aicon ai-xitongrizhi-tiaoshi', 'system/pinduoduo/my_settlement', '', '_self', 0, 0, 0, 1, 1, 1557392328),
(165, 0, 161, 'system', '我的代收银行', 'fa fa-home', 'system/pinduoduo/bank', '', '_self', 0, 0, 0, 1, 1, 1557409037),
(166, 0, 161, 'system', '添加代收银行', 'aicon ai-tianjia', 'system/pinduoduo/bank_add', '', '_self', 0, 0, 0, 1, 1, 1557420186),
(167, 0, 165, 'system', '修改银行名称', 'aicon ai-jinzhi', 'system/pinduoduo/bank_retitle', '', '_self', 0, 0, 0, 1, 1, 1557420306),
(168, 0, 165, 'system', '修改收款人姓名', 'aicon ai-jinzhi', 'system/pinduoduo/bank_rename', '', '_self', 0, 0, 0, 1, 1, 1557420355),
(169, 0, 165, 'system', '修改收款账号', 'aicon ai-jinzhi', 'system/pinduoduo/bank_readdress', '', '_self', 0, 0, 0, 1, 1, 1557420403),
(170, 0, 163, 'system', '结算确认', 'aicon ai-jinzhi', 'system/pinduoduo/settlement_status', '', '_self', 0, 0, 0, 1, 1, 1557433903),
(171, 0, 141, 'system', '自动任务', 'typcn typcn-arrow-repeat', 'system/pinduoduo/OnPayOneMinute', '', '_self', 0, 0, 0, 1, 1, 1557485902),
(172, 0, 171, 'system', '一分钟订单支付', 'typcn typcn-arrow-repeat', 'system/pinduoduo/OnPayOneMinute', '', '_self', 0, 0, 0, 1, 1, 1557486056),
(173, 0, 171, 'system', '五分钟订单支付', 'typcn typcn-arrow-repeat', 'system/pinduoduo/OnPayFiveMinute', '', '_self', 0, 0, 0, 1, 1, 1557486090),
(174, 0, 171, 'system', '确认收货', 'typcn typcn-arrow-repeat', 'system/pinduoduo/Received', '', '_self', 0, 0, 0, 1, 1, 1557486120),
(175, 0, 171, 'system', '统计', 'typcn typcn-arrow-repeat', 'system/pinduoduo/Statistic', '', '_self', 0, 0, 0, 1, 0, 1557486159),
(176, 0, 163, 'system', '结算取消', 'aicon ai-jinzhi', 'system/pinduoduo/settlement_cancel', '', '_self', 0, 0, 0, 1, 1, 1557676607),
(177, 0, 164, 'system', '结算取消', 'aicon ai-jinzhi', 'system/pinduoduo/my_settlement_cancel', '', '_self', 0, 0, 0, 1, 1, 1557679829),
(178, 0, 161, 'system', '绑定Google验证器', 'typcn typcn-key-outline', 'system/pinduoduo/google_bind', '', '_self', 0, 0, 0, 1, 1, 1557747066),
(179, 0, 154, 'system', '添加QQ号', 'aicon ai-tianjia', 'system/pinduoduo/qq_add', '', '_self', 0, 0, 0, 1, 1, 1558088154),
(180, 0, 154, 'system', '一键导入', 'aicon ai-chu1', 'system/pinduoduo/onekey', '', '_self', 0, 0, 0, 1, 1, 1558612245),
(181, 0, 146, 'system', '农产品订单', 'aicon ai-shujukuguanli', 'system/pinduoduo/orders_ncp', '', '_self', 0, 0, 0, 1, 0, 1558793751),
(182, 0, 142, 'system', '商户中心', 'fa fa-flag-o', 'system/pinduoduo/clients', '', '_self', 0, 0, 0, 1, 1, 1559381025),
(183, 1, 4, 'system', '一键导入', 'aicon ai-chu1', 'system/pinduoduo/onekey', '', '_self', 0, 0, 0, 1, 1, 1559749490),
(184, 1, 4, 'system', '商户中心', 'fa fa-flag-o', 'system/pinduoduo/clients', '', '_self', 0, 0, 0, 1, 1, 1559750923),
(185, 1, 4, 'system', '店铺列表', 'aicon ai-mokuaiguanli1', 'system/pinduoduo/stores', '', '_self', 0, 0, 0, 1, 1, 1560501057);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_menu_lang`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_menu_lang` (
  `id` int(11) unsigned NOT NULL,
  `menu_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '' COMMENT '标题',
  `lang` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '语言包'
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=utf8 COMMENT='[系统] 管理菜单语言包';

--
-- 转存表中的数据 `pinduoduo_system_menu_lang`
--

INSERT INTO `pinduoduo_system_menu_lang` (`id`, `menu_id`, `title`, `lang`) VALUES
(131, 1, '首页', 1),
(132, 2, '系统', 1),
(133, 3, '插件', 1),
(134, 4, '快捷菜单', 1),
(135, 5, '插件列表', 1),
(136, 6, '系统基础', 1),
(137, 7, '预留占位', 1),
(138, 8, '系统扩展', 1),
(139, 9, '开发专用', 1),
(140, 10, '系统设置', 1),
(141, 11, '配置管理', 1),
(142, 12, '系统菜单', 1),
(143, 13, '管理员角色', 1),
(144, 14, '系统管理员', 1),
(145, 15, '系统日志', 1),
(146, 16, '附件管理', 1),
(147, 17, '本地模块', 1),
(148, 18, '本地插件', 1),
(149, 19, '插件钩子', 1),
(150, 20, '预留占位', 1),
(151, 21, '预留占位', 1),
(152, 22, '预留占位', 1),
(153, 23, '预留占位', 1),
(154, 24, '后台首页', 1),
(155, 25, '清空缓存', 1),
(156, 26, '添加菜单', 1),
(157, 27, '修改菜单', 1),
(158, 28, '删除菜单', 1),
(159, 29, '状态设置', 1),
(160, 30, '排序设置', 1),
(161, 31, '添加快捷菜单', 1),
(162, 32, '导出菜单', 1),
(163, 33, '添加角色', 1),
(164, 34, '修改角色', 1),
(165, 35, '删除角色', 1),
(166, 36, '状态设置', 1),
(167, 37, '添加管理员', 1),
(168, 38, '修改管理员', 1),
(169, 39, '删除管理员', 1),
(170, 40, '状态设置', 1),
(171, 41, '个人信息设置', 1),
(172, 42, '安装插件', 1),
(173, 43, '卸载插件', 1),
(174, 44, '删除插件', 1),
(175, 45, '状态设置', 1),
(176, 46, '生成插件', 1),
(177, 47, '运行插件', 1),
(178, 48, '更新插件', 1),
(179, 49, '插件配置', 1),
(180, 50, '添加钩子', 1),
(181, 51, '修改钩子', 1),
(182, 52, '删除钩子', 1),
(183, 53, '状态设置', 1),
(184, 54, '插件排序', 1),
(185, 55, '添加配置', 1),
(186, 56, '修改配置', 1),
(187, 57, '删除配置', 1),
(188, 58, '状态设置', 1),
(189, 59, '排序设置', 1),
(190, 60, '基础配置', 1),
(191, 61, '系统配置', 1),
(192, 62, '上传配置', 1),
(193, 63, '开发配置', 1),
(194, 64, '生成模块', 1),
(195, 65, '安装模块', 1),
(196, 66, '卸载模块', 1),
(197, 67, '状态设置', 1),
(198, 68, '设置默认模块', 1),
(199, 69, '删除模块', 1),
(200, 70, '预留占位', 1),
(201, 71, '预留占位', 1),
(202, 72, '预留占位', 1),
(203, 73, '预留占位', 1),
(204, 74, '预留占位', 1),
(205, 75, '预留占位', 1),
(206, 76, '预留占位', 1),
(207, 77, '预留占位', 1),
(208, 78, '附件上传', 1),
(209, 79, '删除附件', 1),
(210, 80, '框架升级', 1),
(211, 81, '获取升级列表', 1),
(212, 82, '安装升级包', 1),
(213, 83, '下载升级包', 1),
(214, 84, '数据库管理', 1),
(215, 85, '备份数据库', 1),
(216, 86, '恢复数据库', 1),
(217, 87, '优化数据库', 1),
(218, 88, '删除备份', 1),
(219, 89, '修复数据库', 1),
(220, 90, '设置默认等级', 1),
(221, 91, '数据库配置', 1),
(222, 92, '模块打包', 1),
(223, 93, '插件打包', 1),
(224, 94, '主题管理', 1),
(225, 95, '设置默认主题', 1),
(226, 96, '删除主题', 1),
(227, 97, '语言包管理', 1),
(228, 98, '添加语言包', 1),
(229, 99, '修改语言包', 1),
(230, 100, '删除语言包', 1),
(231, 101, '排序设置', 1),
(232, 102, '状态设置', 1),
(233, 103, '收藏夹图标上传', 1),
(234, 104, '导入模块', 1),
(235, 105, '后台首页', 1),
(236, 106, '布局切换', 1),
(237, 107, '删除日志', 1),
(238, 108, '清空日志', 1),
(239, 109, '编辑模块', 1),
(240, 110, '模块图标上传', 1),
(241, 111, '导入插件', 1),
(242, 112, '钩子插件状态', 1),
(243, 113, '设置主题', 1),
(244, 114, '应用市场', 1),
(245, 115, '安装应用', 1),
(246, 116, '重置密码', 1),
(247, 117, '预留占位', 1),
(248, 118, '预留占位', 1),
(249, 119, '预留占位', 1),
(250, 120, '预留占位', 1),
(251, 121, '预留占位', 1),
(252, 122, '预留占位', 1),
(253, 123, '预留占位', 1),
(254, 124, '预留占位', 1),
(255, 125, '预留占位', 1),
(256, 126, '预留占位', 1),
(257, 127, '预留占位', 1),
(258, 128, '预留占位', 1),
(259, 129, '预留占位', 1),
(260, 130, '预留占位', 1),
(261, 131, '预留占位', 1),
(262, 132, '预留占位', 1),
(263, 133, '预留占位', 1),
(264, 134, '预留占位', 1),
(265, 135, '预留占位', 1),
(266, 136, '预留占位', 1),
(267, 137, '预留占位', 1),
(268, 138, '预留占位', 1),
(269, 139, '预留占位', 1),
(270, 140, '预留占位', 1);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_module`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_module` (
  `id` int(10) unsigned NOT NULL,
  `system` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '系统模块',
  `name` varchar(50) NOT NULL COMMENT '模块名(英文)',
  `identifier` varchar(100) NOT NULL COMMENT '模块标识(模块名(字母).开发者标识.module)',
  `title` varchar(50) NOT NULL COMMENT '模块标题',
  `intro` varchar(255) NOT NULL COMMENT '模块简介',
  `author` varchar(100) NOT NULL COMMENT '作者',
  `icon` varchar(80) NOT NULL DEFAULT 'aicon ai-mokuaiguanli' COMMENT '图标',
  `version` varchar(20) NOT NULL COMMENT '版本号',
  `url` varchar(255) NOT NULL COMMENT '链接',
  `sort` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0未安装，1未启用，2已启用',
  `default` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '默认模块(只能有一个)',
  `config` text NOT NULL COMMENT '配置',
  `app_id` varchar(30) NOT NULL DEFAULT '0' COMMENT '应用市场ID(0本地)',
  `app_keys` varchar(200) DEFAULT '' COMMENT '应用秘钥',
  `theme` varchar(50) NOT NULL DEFAULT 'default' COMMENT '主题模板',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='[系统] 模块';

--
-- 转存表中的数据 `pinduoduo_system_module`
--

INSERT INTO `pinduoduo_system_module` (`id`, `system`, `name`, `identifier`, `title`, `intro`, `author`, `icon`, `version`, `url`, `sort`, `status`, `default`, `config`, `app_id`, `app_keys`, `theme`, `ctime`, `mtime`) VALUES
(1, 1, 'system', 'system.hisiphp.module', '系统管理模块', '系统核心模块，用于后台各项管理功能模块及功能拓展', 'HisiPHP官方出品', '', '1.0.0', 'http://www.hisiphp.com', 0, 2, 0, '', '0', '', 'default', 1489998096, 1489998096),
(2, 1, 'index', 'index.hisiphp.module', '默认模块', '推荐使用扩展模块作为默认首页。', 'HisiPHP官方出品', '', '1.0.0', 'http://www.hisiphp.com', 0, 2, 0, '', '0', '', 'default', 1489998096, 1489998096),
(3, 1, 'install', 'install.hisiphp.module', '系统安装模块', '系统安装模块，勿动。', 'HisiPHP官方出品', '', '1.0.0', 'http://www.hisiphp.com', 0, 2, 0, '', '0', '', 'default', 1489998096, 1489998096);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_plugins`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_plugins` (
  `id` int(11) unsigned NOT NULL,
  `system` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL COMMENT '插件名称(英文)',
  `title` varchar(32) NOT NULL COMMENT '插件标题',
  `icon` varchar(64) NOT NULL COMMENT '图标',
  `intro` text NOT NULL COMMENT '插件简介',
  `author` varchar(32) NOT NULL COMMENT '作者',
  `url` varchar(255) NOT NULL COMMENT '作者主页',
  `version` varchar(16) NOT NULL DEFAULT '' COMMENT '版本号',
  `identifier` varchar(64) NOT NULL DEFAULT '' COMMENT '插件唯一标识符',
  `config` text NOT NULL COMMENT '插件配置',
  `app_id` varchar(30) NOT NULL DEFAULT '0' COMMENT '来源(0本地)',
  `app_keys` varchar(200) DEFAULT '' COMMENT '应用秘钥',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='[系统] 插件表';

--
-- 转存表中的数据 `pinduoduo_system_plugins`
--

INSERT INTO `pinduoduo_system_plugins` (`id`, `system`, `name`, `title`, `icon`, `intro`, `author`, `url`, `version`, `identifier`, `config`, `app_id`, `app_keys`, `ctime`, `mtime`, `sort`, `status`) VALUES
(1, 1, 'hisiphp', '系统基础信息', '/static/plugins/hisiphp/hisiphp.png', '后台首页展示系统基础信息和开发团队信息', 'HisiPHP', 'http://www.hisiphp.com', '1.0.0', 'hisiphp.hisiphp.plugins', '', '0', '', 1509379331, 1509379331, 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_role`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_role` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '角色名称',
  `intro` varchar(200) NOT NULL COMMENT '角色简介',
  `auth` text NOT NULL COMMENT '角色权限',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='[系统] 管理角色';

--
-- 转存表中的数据 `pinduoduo_system_role`
--

INSERT INTO `pinduoduo_system_role` (`id`, `name`, `intro`, `auth`, `ctime`, `mtime`, `status`) VALUES
(1, '超级管理员', '拥有系统最高权限', '0', 1489411760, 0, 1),
(2, '系统管理员', '拥有系统管理员权限', '{"0":"1","1":"4","2":"25","3":"24","4":"105","5":"106","6":"113","7":"141","8":"142","9":"41","10":"143","11":"144","12":"145","13":"182","14":"146","15":"147","16":"148","17":"149","18":"150","19":"151","20":"152","21":"153","22":"154","23":"155","24":"156","25":"157","26":"179","27":"180","28":"161","29":"162","30":"163","31":"170","32":"176","33":"164","34":"177","35":"165","36":"167","37":"168","38":"169","39":"166","40":"178","41":"171","42":"172","43":"173","44":"174","45":"2","46":"6","47":"10","48":"60","49":"61","50":"62","51":"63","52":"91","53":"11","54":"55","55":"56","56":"57","57":"58","58":"59","59":"12","60":"26","61":"27","62":"28","63":"29","64":"30","65":"31","66":"32","67":"13","68":"33","69":"34","70":"35","71":"36","72":"14","73":"37","74":"38","75":"39","76":"40","77":"84","78":"85","79":"86","80":"87","81":"88","82":"89","86":"16","87":"78","88":"79","96":"8","97":"114","98":"115","99":"17","100":"65","101":"66","102":"67","103":"68","107":"94","108":"95","113":"18","114":"93","115":"42","116":"43","117":"44","118":"45","120":"47","121":"48","122":"49","123":"111","124":"19","125":"50","126":"51","127":"52","128":"53","129":"54","130":"80","131":"81","132":"82","133":"83"}', 1489411760, 1559751351, 1),
(3, '普通管理员', '普通管理员', '{"0":"1","1":"4","2":"25","3":"24","5":"106","6":"113","7":"141","8":"142","10":"143","11":"144","12":"145","14":"146","15":"147","16":"148","17":"149","18":"150","19":"151","20":"152","21":"153","22":"154","23":"155","24":"156","25":"157","26":"179","27":"180"}', 1507737902, 1559753299, 1),
(4, '代理商', '代理商', '{"0":"1","7":"141","8":"142","9":"41","10":"143","11":"144","12":"145","14":"146","15":"147","16":"148","17":"149","18":"150","19":"151","20":"152","21":"153","22":"154","23":"155","24":"156","25":"157","26":"179","27":"180"}', 1557039314, 1559753481, 1),
(6, '商户', '三方支付平台', '{"1":"141","2":"142","3":"41","4":"143","20":"161","21":"162","25":"164","26":"177","27":"165","28":"167","29":"168","30":"169","31":"166","32":"178"}', 1557296062, 1558335884, 1),
(7, '财务管理', '负责下发', '{"1":"141","10":"149","13":"152","19":"161","21":"163","22":"170","23":"176"}', 1557472182, 1557680037, 1);

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_system_user`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_system_user` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '角色ID',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(64) NOT NULL,
  `nick` varchar(50) NOT NULL COMMENT '昵称',
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `auth` text NOT NULL COMMENT '权限',
  `iframe` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0默认，1框架',
  `theme` varchar(50) NOT NULL DEFAULT 'default' COMMENT '主题',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `last_login_ip` varchar(128) NOT NULL COMMENT '最后登陆IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登陆时间',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `c_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商户id',
  `d_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id',
  `total` decimal(12,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '下发余额'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='[系统] 管理用户';

--
-- 转存表中的数据 `pinduoduo_system_user`
--

INSERT INTO `pinduoduo_system_user` (`id`, `role_id`, `username`, `password`, `nick`, `mobile`, `email`, `auth`, `iframe`, `theme`, `status`, `last_login_ip`, `last_login_time`, `ctime`, `mtime`, `c_id`, `d_id`, `total`) VALUES
(1, 1, 'admin', '$2y$10$Jb0N9T7EmMz7vX3ctzZqs.5oahq5SpKy3Qadafqnr.QnzZN2/5dKq', '超级管理员', '15005124985', '123456@qq.com', '', 0, '7', 1, '61.157.137.62', 1562376017, 1556544511, 1562376045, 0, 0, '0.00'),
(29, 6, 'test', '$2y$10$JLKOap7dDAggB.A4glxl2O/DXICWMEJWqf/nLQHGZ76a17FJUnuEy', 'test', '15220868478', '505052654@qq.com', '', 0, '7', 1, '', 0, 1562376257, 1562376257, 5, 0, '0.00');

-- --------------------------------------------------------

--
-- 表的结构 `pinduoduo_user`
--

CREATE TABLE IF NOT EXISTS `pinduoduo_user` (
  `id` int(10) unsigned NOT NULL COMMENT '主键',
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `access_token` char(59) NOT NULL DEFAULT '' COMMENT '拼多多access_token',
  `acid` char(32) NOT NULL DEFAULT '' COMMENT '拼多多acid',
  `uid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '拼多多uid',
  `uin` char(32) NOT NULL DEFAULT '' COMMENT '拼多多uin',
  `admin_uid` int(11) NOT NULL DEFAULT '0' COMMENT '管理员id',
  `ip` varchar(15) NOT NULL DEFAULT '' COMMENT '管理员ip地址',
  `is_expired` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否过期(0未过期,1过期,2未填收货地址,3下单失败)',
  `is_limit` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否受限(0未受限,1受限)',
  `no_addr` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否无地址(0有地址,1无地址)',
  `use_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '使用时间',
  `today_total` int(11) NOT NULL DEFAULT '0' COMMENT '今日总额',
  `is_limit_total` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否超总额(0未超额,1超额)',
  `comment_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '提交日期',
  `ctime` datetime DEFAULT NULL COMMENT '创建时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否禁用(1启用,0禁用)',
  `expired_limit_noaddr` varchar(50) NOT NULL DEFAULT '''''' COMMENT '超额字符串',
  `address_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '地址id',
  `c_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商户id',
  `d_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '代理商id'
) ENGINE=InnoDB AUTO_INCREMENT=2906 DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `pinduoduo_user`
--

INSERT INTO `pinduoduo_user` (`id`, `phone`, `access_token`, `acid`, `uid`, `uin`, `admin_uid`, `ip`, `is_expired`, `is_limit`, `no_addr`, `use_time`, `today_total`, `is_limit_total`, `comment_time`, `ctime`, `status`, `expired_limit_noaddr`, `address_id`, `c_id`, `d_id`) VALUES
(2905, '13981187119', '5LFQPTO63VRFUZHDDW4QJWKSQLG6MGSNQYKTPUY6BEOOA73NQFZA1002b2d', '1f4dfca1162ff02d806671eb0bebb738', 8798462540843, 'MRVTDFSTB4TCPXDMEQRJ6SDTTU_GEXDA', 1, '61.157.137.62', 0, 0, 0, 1562378914, 0, 0, 0, '2019-07-06 09:29:25', 1, '<span style="color:green">正常</span>', 9830748494, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinduoduo_address`
--
ALTER TABLE `pinduoduo_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_bank`
--
ALTER TABLE `pinduoduo_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_cash`
--
ALTER TABLE `pinduoduo_cash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id_idx` (`f_id`) USING BTREE,
  ADD KEY `admin_uid_idx` (`admin_uid`) USING BTREE;

--
-- Indexes for table `pinduoduo_client`
--
ALTER TABLE `pinduoduo_client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`) USING BTREE;

--
-- Indexes for table `pinduoduo_config`
--
ALTER TABLE `pinduoduo_config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_idx` (`name`) USING BTREE;

--
-- Indexes for table `pinduoduo_errors`
--
ALTER TABLE `pinduoduo_errors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_goods`
--
ALTER TABLE `pinduoduo_goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goods_url_idx` (`goods_url`) USING BTREE,
  ADD KEY `status_idx` (`status`) USING BTREE,
  ADD KEY `is_upper_idx` (`is_upper`) USING BTREE,
  ADD KEY `last_use_time_idx` (`last_use_time`) USING BTREE,
  ADD KEY `c_id_idx` (`c_id`) USING BTREE,
  ADD KEY `d_id_idx` (`d_id`) USING BTREE;

--
-- Indexes for table `pinduoduo_jobs`
--
ALTER TABLE `pinduoduo_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_orders`
--
ALTER TABLE `pinduoduo_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_sn_idx` (`order_sn`) USING BTREE,
  ADD KEY `is_pay_idx` (`is_pay`) USING BTREE,
  ADD KEY `admin_uid_idx` (`admin_uid`) USING BTREE,
  ADD KEY `g_id_idx` (`g_id`) USING BTREE,
  ADD KEY `user_id_idx` (`user_id`) USING BTREE,
  ADD KEY `c_id` (`c_id`) USING BTREE,
  ADD KEY `status_idx` (`status`) USING BTREE,
  ADD KEY `api_order_sn_idx` (`api_order_sn`) USING BTREE,
  ADD KEY `pay_type_idx` (`pay_type`) USING BTREE,
  ADD KEY `p_id_idx` (`p_id`) USING BTREE,
  ADD KEY `d_id_idx` (`d_id`) USING BTREE;

--
-- Indexes for table `pinduoduo_passageway`
--
ALTER TABLE `pinduoduo_passageway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_reports`
--
ALTER TABLE `pinduoduo_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_stores`
--
ALTER TABLE `pinduoduo_stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_idx` (`name`) USING BTREE,
  ADD KEY `c_id_idx` (`c_id`) USING BTREE,
  ADD KEY `d_id_idx` (`d_id`) USING BTREE;

--
-- Indexes for table `pinduoduo_system_annex`
--
ALTER TABLE `pinduoduo_system_annex`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`) USING BTREE;

--
-- Indexes for table `pinduoduo_system_annex_group`
--
ALTER TABLE `pinduoduo_system_annex_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_config`
--
ALTER TABLE `pinduoduo_system_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_hook`
--
ALTER TABLE `pinduoduo_system_hook`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `pinduoduo_system_hook_plugins`
--
ALTER TABLE `pinduoduo_system_hook_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_language`
--
ALTER TABLE `pinduoduo_system_language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`) USING BTREE;

--
-- Indexes for table `pinduoduo_system_log`
--
ALTER TABLE `pinduoduo_system_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_menu`
--
ALTER TABLE `pinduoduo_system_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_menu_lang`
--
ALTER TABLE `pinduoduo_system_menu_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_module`
--
ALTER TABLE `pinduoduo_system_module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE,
  ADD UNIQUE KEY `identifier` (`identifier`) USING BTREE;

--
-- Indexes for table `pinduoduo_system_plugins`
--
ALTER TABLE `pinduoduo_system_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinduoduo_system_role`
--
ALTER TABLE `pinduoduo_system_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `pinduoduo_system_user`
--
ALTER TABLE `pinduoduo_system_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id_idx` (`c_id`) USING BTREE,
  ADD KEY `d_id_idx` (`d_id`) USING BTREE;

--
-- Indexes for table `pinduoduo_user`
--
ALTER TABLE `pinduoduo_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone_idx` (`phone`) USING BTREE,
  ADD KEY `status_idx` (`status`) USING BTREE,
  ADD KEY `is_expired_idx` (`is_expired`) USING BTREE,
  ADD KEY `use_time_idx` (`use_time`) USING BTREE,
  ADD KEY `c_id_idx` (`c_id`) USING BTREE,
  ADD KEY `d_id_idx` (`d_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinduoduo_address`
--
ALTER TABLE `pinduoduo_address`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `pinduoduo_bank`
--
ALTER TABLE `pinduoduo_bank`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `pinduoduo_cash`
--
ALTER TABLE `pinduoduo_cash`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `pinduoduo_client`
--
ALTER TABLE `pinduoduo_client`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pinduoduo_config`
--
ALTER TABLE `pinduoduo_config`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pinduoduo_errors`
--
ALTER TABLE `pinduoduo_errors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `pinduoduo_goods`
--
ALTER TABLE `pinduoduo_goods`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=421;
--
-- AUTO_INCREMENT for table `pinduoduo_jobs`
--
ALTER TABLE `pinduoduo_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pinduoduo_orders`
--
ALTER TABLE `pinduoduo_orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=181358;
--
-- AUTO_INCREMENT for table `pinduoduo_passageway`
--
ALTER TABLE `pinduoduo_passageway`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pinduoduo_reports`
--
ALTER TABLE `pinduoduo_reports`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- AUTO_INCREMENT for table `pinduoduo_stores`
--
ALTER TABLE `pinduoduo_stores`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pinduoduo_system_annex`
--
ALTER TABLE `pinduoduo_system_annex`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pinduoduo_system_annex_group`
--
ALTER TABLE `pinduoduo_system_annex_group`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pinduoduo_system_config`
--
ALTER TABLE `pinduoduo_system_config`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `pinduoduo_system_hook`
--
ALTER TABLE `pinduoduo_system_hook`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pinduoduo_system_hook_plugins`
--
ALTER TABLE `pinduoduo_system_hook_plugins`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pinduoduo_system_language`
--
ALTER TABLE `pinduoduo_system_language`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pinduoduo_system_log`
--
ALTER TABLE `pinduoduo_system_log`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=281;
--
-- AUTO_INCREMENT for table `pinduoduo_system_menu`
--
ALTER TABLE `pinduoduo_system_menu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `pinduoduo_system_menu_lang`
--
ALTER TABLE `pinduoduo_system_menu_lang`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `pinduoduo_system_module`
--
ALTER TABLE `pinduoduo_system_module`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pinduoduo_system_plugins`
--
ALTER TABLE `pinduoduo_system_plugins`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pinduoduo_system_role`
--
ALTER TABLE `pinduoduo_system_role`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pinduoduo_system_user`
--
ALTER TABLE `pinduoduo_system_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pinduoduo_user`
--
ALTER TABLE `pinduoduo_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',AUTO_INCREMENT=2906;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

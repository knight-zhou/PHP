-- phpMyAdmin SQL Dump
-- version phpStudy 2015
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 24日 17:49
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `dw_ad`
--

CREATE TABLE IF NOT EXISTS `dw_ad` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `navbody` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `dw_article`
--

CREATE TABLE IF NOT EXISTS `dw_article` (
  `articleid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `ar_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `keywords` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `titlepic` varchar(255) COLLATE utf8_bin NOT NULL,
  `isshow` smallint(1) NOT NULL,
  `writer` varchar(255) COLLATE utf8_bin NOT NULL,
  `from` varchar(255) COLLATE utf8_bin NOT NULL,
  `hits` int(11) unsigned NOT NULL,
  `res` int(11) NOT NULL,
  `subdate` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`articleid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=67 ;

--
-- 转存表中的数据 `dw_article`
--

INSERT INTO `dw_article` (`articleid`, `classname`, `title`, `ar_desc`, `keywords`, `content`, `titlepic`, `isshow`, `writer`, `from`, `hits`, `res`, `subdate`) VALUES
(66, '默认分类', 'kngiht博客系统', 'php', 'kngiht博客系统。', '<p>学习</p><p>挺方便</p><p>不错</p>', '04d2b1e45b316a65a737fc4335757965.jpg', 0, '', '', 0, 0, '2015/12/02');

-- --------------------------------------------------------

--
-- 表的结构 `dw_class`
--

CREATE TABLE IF NOT EXISTS `dw_class` (
  `classid` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(255) COLLATE utf8_bin NOT NULL,
  `classtitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `classdesc` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `dw_class`
--

INSERT INTO `dw_class` (`classid`, `classname`, `classtitle`, `classdesc`) VALUES
(26, '默认分类', '默认分类', '默认分类');

-- --------------------------------------------------------

--
-- 表的结构 `dw_config`
--

CREATE TABLE IF NOT EXISTS `dw_config` (
  `webid` int(11) NOT NULL AUTO_INCREMENT,
  `webtitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `webkeywords` varchar(255) COLLATE utf8_bin NOT NULL,
  `webdesc` varchar(255) COLLATE utf8_bin NOT NULL,
  `webfoot` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`webid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `dw_config`
--

INSERT INTO `dw_config` (`webid`, `webtitle`, `webkeywords`, `webdesc`, `webfoot`) VALUES
(1, 'knight简易博客系统', '一款简单晚上手的博客系统', 'php博客系统', 'github.com/knight-zhou');

-- --------------------------------------------------------

--
-- 表的结构 `dw_nav`
--

CREATE TABLE IF NOT EXISTS `dw_nav` (
  `navid` int(11) NOT NULL AUTO_INCREMENT,
  `navname` varchar(255) COLLATE utf8_bin NOT NULL,
  `navurl` varchar(255) COLLATE utf8_bin NOT NULL,
  `index` int(11) NOT NULL,
  PRIMARY KEY (`navid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `dw_nav`
--

INSERT INTO `dw_nav` (`navid`, `navname`, `navurl`, `index`) VALUES
(8, '官方网站', 'https://github.com/knight-zhou', 0);

-- --------------------------------------------------------

--
-- 表的结构 `dw_user`
--

CREATE TABLE IF NOT EXISTS `dw_user` (
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `userpass` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `dw_user`
--

INSERT INTO `dw_user` (`userid`, `username`, `userpass`) VALUES
(1, 'admin', '7fef6171469e80d32c0559f88b377245');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

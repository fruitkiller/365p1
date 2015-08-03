SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `roc_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `act_user`;
CREATE TABLE `act_user` (
  `uid` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(26) NOT NULL,
  `email` char(36),
  `tel` char(16),
  `atid` bigint(16) unsigned NOT NULL default '0',
  `alias` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `regtime` int(11) unsigned NOT NULL,
  `lasttime` int(11) unsigned NOT NULL,
  `qqid` char(32),
  `groupid` bigint(16) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`),
  UNIQUE KEY (`username`,`alias`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `act_interest`;
CREATE TABLE `act_interest` (
  `id` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `uid`  bigint(16) unsigned NOT NULL,
  `iuid`  bigint(16) unsigned NOT NULL,
  `time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY (`uid`,`iuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


DROP TABLE IF EXISTS `act_topic`;
CREATE TABLE `act_topic` (
  `tid` bigint(16) NOT NULL AUTO_INCREMENT,
  `uid` bigint(16) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `comments` mediumint(8) NOT NULL DEFAULT '0',
  `atid` bigint(16) unsigned NOT NULL default '0',
  `place` varchar(32) DEFAULT NULL,
  `longitude` FLOAT,
  `latitude` FLOAT,
  `status` char(36) NOT NULL DEFAULT 'active',
  `type` char(36) NOT NULL DEFAULT 'topic',
  `createtime` int(11) unsigned NOT NULL,
  `finishtime` int(11) unsigned NOT NULL,
  `lastreplytime` int(11) unsigned NOT NULL,
  PRIMARY KEY (`tid`),
  KEY (`uid`,`title`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


DROP TABLE IF EXISTS `act_reply`;
CREATE TABLE `act_reply` (
  `rid` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `frid` bigint(16) unsigned NOT NULL default '0',
  `tid` bigint(16) unsigned NOT NULL default '0',
  `uid` bigint(16) unsigned NOT NULL,
  `atid` bigint(16) unsigned NOT NULL default '0',
  `content` text NOT NULL,
  `posttime` int(11) unsigned NOT NULL,
  PRIMARY KEY (`rid`),
  KEY (`frid`,`tid`,`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `act_attachment`;
CREATE TABLE `act_attachment` (
  `atid` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `iid`  bigint(16) unsigned NOT NULL default '0',
  `path` varchar(128) NOT NULL,
  `time` int(11) unsigned NOT NULL,
  `type` int(11) unsigned NOT NULL DEFAULT '0',
  `itype` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`atid`),
  KEY (`iid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `act_favorite`;
CREATE TABLE `act_favorite` (
  `id` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `uid`  bigint(16) unsigned NOT NULL,
  `tid`  bigint(16) unsigned NOT NULL,
  `time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY (`uid`,`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;








-- 创建数据库project5
create database project5;
-- 选择数据库
use project5;
-- 创建表news
CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT COMMENT '新闻编号',
  `title` varchar(60) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 向News表中插入数据
INSERT INTO `news` (`id`, `title`, `content`, `addtime`) VALUES
(1, '新闻标题1', '新闻内容1', '2015-10-09 09:07:58'),
(2, '新闻标题2', '新闻内容2', '2015-10-09 09:07:58'),
(3, '新闻3', '新闻内容3', '2019-05-17 06:51:04');

-- 查询语句
select title,addtime from news order by addtime desc;

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT COMMENT '用户编号',
  `username` varchar(60) NOT NULL COMMENT '用户名',  
  `password` varchar(10) NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into news(title, content) values ('新闻4', '44444');

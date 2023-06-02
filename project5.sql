-- 创建数据库
create database zjh;
-- 选择数据库
use zjh;
-- 创建表info
CREATE TABLE `info21180123` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT COMMENT '博客编号',
  `title` varchar(60) NOT NULL COMMENT '博客标题',
  `content` text NOT NULL COMMENT '博客内容',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 向info表中插入数据
INSERT INTO `info21180123` (`id`, `title`, `content`, `addtime`) VALUES
(1, '博客标题1', '博客内容1', '2015-10-09 09:07:58'),
(2, '博客标题2', '博客内容2', '2015-10-09 09:07:58'),
(3, '博客3', '博客内容3', '2019-05-17 06:51:04');

-- 查询语句
select title,addtime from news order by addtime desc;

-- 创建表user
CREATE TABLE `user21180123` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT COMMENT '用户编号',
  `username` varchar(60) NOT NULL COMMENT '用户名',  
  `password` varchar(10) NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into news(title, content) values ('博客4', '44444');

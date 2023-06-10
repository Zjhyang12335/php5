-- 创建数据库
create database zjh;
-- 选择数据库
use zjh;
-- 创建表info
CREATE TABLE `info21180123` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT COMMENT '留言编号',
  `title` varchar(60) NOT NULL COMMENT '留言标题',
  `content` text NOT NULL COMMENT '留言内容',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 向info表中插入数据
INSERT INTO `info21180123` (`id`, `title`, `content`, `addtime`) VALUES
(1, '标题1', '内容1', '2015-10-09 09:07:58'),
(2, '标题2', '内容2', '2015-10-09 09:07:58'),
(3, '标题3', '内容3', '2019-05-17 06:51:04');

-- 查询语句
-- select title,addtime from news order by addtime desc;

-- 创建表user
CREATE TABLE `user21180123` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT COMMENT '用户编号',
  `username` varchar(60) NOT NULL COMMENT '用户名',  
  `password` varchar(10) NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- insert into news(title, content) values ('标题4', '44444');

CREATE TABLE products21180123 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    price DECIMAL(10, 2)
);

INSERT INTO products21180123 (id, name, price)
VALUES
    (1, '爱的N次方', 62),
    (2, '果肉果冻', 40),
    (3, '芒果味', 30),
    (4, '果冻荔枝味', 30),
    (5, '果味巧克力', 30),
    (6, '奶油水果', 30),
    (7, '玫瑰花型', 30),
    (8, '燕麦奶油', 30);
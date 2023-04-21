<?php
header('Content-type:text/html; charset=utf8');
require './init.php';// 连接数据库
// 数据查询
$sql = 'select title,addtime from news order by addtime desc';// 查询sql语句
$stmt = $pdo->query($sql);// 执行查询语句，查询结果存储到PDOStatement对象
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);// 获取结果集，并且将结果集存储在数组data中

// print_r($data);// 测试输出
require './view/news.html';
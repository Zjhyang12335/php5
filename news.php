<?php
header('Content-type:text/html; charset=utf8');
require './init.php';// 连接数据库
// 数据查询
$sql = 'select id, title, addtime from info21180123 order by addtime desc';// 查询sql语句
$stmt = $pdo->query($sql);// 执行查询语句，查询结果存储到PDOStatement对象
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);// 获取结果集，并且将结果集存储在数组data中
session_start();
if (!isset($_SESSION['user'])){
    header('Location: login.php');// 如果session数据不存在，则跳转到登录页面，重新登录
    exit;
}
// print_r($data);// 测试输出
require './liuyan.html';
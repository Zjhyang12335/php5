<?php
// 获取地址栏传递的get参数id
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$data = array('id'=>$id);// 将id存储到数组data中
require 'init.php';
$sql = 'select title, addtime, content from news where id=:id';
$stmt = $pdo->prepare($sql);// 预编译sql语句
if (!$stmt->execute($data)){
    exit('查询数据失败'.$stmt->errorInfo());
}
// 获取查询结果，存储到数组中
$data = $stmt->fetch(PDO::FETCH_ASSOC);
require './view/show.html';
<?php
require 'init.php';
// 获取要删除的新闻ID
$id = isset($_GET['id'])?(int)$_GET['id']:0;
// 将获取的新闻id号存储在数组data中
$data = array('id'=>$id);
// 编辑删除数据的sql语句
$sql = 'delete from `news` where id=:id';
// 预处理sql语句
$stmt = $pdo->prepare($sql);
// 执行sql语句
if (!$stmt->execute($data)){
    exit('删除失败'.implode('-', $stmt->errorInfo()));
}
// 重定向到首页
header('Location:index.php');
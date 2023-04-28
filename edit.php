<?php
// 连接数据库，插入数据
require 'init.php';
// 获取地址栏传递的get参数id
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$data = array('id'=>$id);// 将id存储到数组data中
// 获取表单中输入的数据
if (!empty($_POST)){

    $data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    $data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';

    // :title :content是占位符，名称与data数组下标一致
    $sql = 'update news set title=:title, content=:content where id=:id';
    $stmt = $pdo->prepare($sql);// 预编译sql语句
    if (!$stmt->execute($data)){
        exit('修改数据失败'.$stmt->errorInfo());
    }
    header('Location:news.php');// 重定向到新闻列表页面
}


$sql = 'select title, addtime, content from news where id=:id';
$stmt = $pdo->prepare($sql);// 预编译sql语句
if (!$stmt->execute($data)){
    exit('查询数据失败'.$stmt->errorInfo());
}
// 获取查询结果，存储到数组中
$data = $stmt->fetch(PDO::FETCH_ASSOC);
require './view/edit.html';
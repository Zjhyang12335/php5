<?php
// 获取表单中输入的数据
if (!empty($_POST)){
    $data = array();// 存储表单中的数据
    $data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    $data['content'] = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';
    // 连接数据库，插入数据
    require 'init.php';
    // :title :content是占位符，名称与data数组下标一致
    $sql = 'insert into info21180123(title, content) values (:title, :content)';
    $stmt = $pdo->prepare($sql);// 预编译sql语句
    if (!$stmt->execute($data)){
        exit('插入数据失败'.$stmt->errorInfo());
    }
    header('Location:news.php');// 重定向到新闻列表页面
}
require './view/add.html';
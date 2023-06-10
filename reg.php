<?php

header('content-type:text/html; charset=utf-8');// 设置编码格式
session_start();
if (isset($_SESSION['user'])){
    header('Location: index.php');// 如果session数据不存在，则跳转到登录页面，重新登录
    exit;
}

require './init.php';// 连接数据库
// 数据查询
$sql = 'select id, username, password from user21180123 order by id desc';// 查询sql语句
$stmt = $pdo->query($sql);// 执行查询语句，查询结果存储到PDOStatement对象
$user_data = $stmt->fetchAll(PDO::FETCH_ASSOC);// 获取结果集，并且将结果集存储在数组data中
if (isset($_POST['reg'])) {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];// 获取用户输入的用户名密码

    // 检查用户名是否已经存在
    $query = "select * from user21180123 where username=:username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header('refresh:1;url=reg.php');
        exit("用户名已经存在，请换个用户名");
    } else {
        // 将用户信息插入数据库
        $query = "insert into user21180123 (username, password) values (:username, :password)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            header('refresh:1;url=login.php');
            exit("注册成功，即将前往登录");
//            echo '注册成功';
        } else {
            exit("注册失败");
        }
    }
}
require './reg.html';
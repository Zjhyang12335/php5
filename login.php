<?php
header('content-type:text/html; charset=utf-8');// 设置编码格式

require './init.php';// 连接数据库
// 数据查询
$sql = 'select id, username, password from user order by id desc';// 查询sql语句
$stmt = $pdo->query($sql);// 执行查询语句，查询结果存储到PDOStatement对象
$user_data = $stmt->fetchAll(PDO::FETCH_ASSOC);// 获取结果集，并且将结果集存储在数组data中
if (isset($_POST['username']) && isset($_POST['password'])){// 判断是否提交了用户名密码
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];// 获取用户输入的用户名密码
//     到用户数组中验证用户名密码
    foreach ($user_data as $k => $v){
//        判断输入的用户名密码和数组中的数据是否一致
        if ($username == $v['username'] && $password == $v['password']){
//            启动session
            session_start();
//            向session中存入用户id和用户名
            $_SESSION['user'] = array('id'=>$k, 'username'=>$v['username']);
            header('Location: news.php');// 用户名密码正确时，页面跳转至个人信息
            exit('登录成功');
        }
    }
    exit('用户名密码错误，登录失败');
}
require './view/login.html';
<?php 
header('Content-type:text/html; charset=utf8');
$dsn = 'mysql:host=localhost;dbname=zjh;charset=utf8';// 数据源，数据库服务器地址，数据库名称
// 连接数据库
try {
    $pdo = new PDO($dsn,'root','root');// 创建pdo对象，连接数据库服务器
}catch (PDOExpection $e){
    exit('数据库连接失败');
}
?>
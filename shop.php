<?php
//商品信息
//$products = array(
//    array("id"=>"1","name"=>"爱的N次方", "price"=>62),
//    array("id"=>"2","name"=>"果肉果冻", "price"=>40),
//    array("id"=>"3","name"=>"芒果味", "price"=>30),
//    array("id"=>"4","name"=>"果冻荔枝味", "price"=>30),
//    array("id"=>"5","name"=>"果味巧克力", "price"=>30),
//    array("id"=>"6","name"=>"奶油水果", "price"=>30),
//    array("id"=>"7","name"=>"玫瑰花型", "price"=>30),
//    array("id"=>"8","name"=>"燕麦奶油", "price"=>30)
//);
require './init.php';// 连接数据库
// 数据查询
$sql = 'select id, name, price from products21180123 order by id asc';// 查询sql语句
$stmt = $pdo->query($sql);// 执行查询语句，查询结果存储到PDOStatement对象
$products = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $product = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "price" => $row['price']
    );
    $products[] = $product;
}

session_start(); //初始化
if (!isset($_SESSION['user'])){
    header('location:login.php');
    exit();
}

$num = 0;
if (!empty($_SESSION['cart'])){
    $order = $_SESSION['cart'];
    $sum = array_sum(array_column($order, "num")); //统计购物车内的商品数量
}
require 'shop.html';
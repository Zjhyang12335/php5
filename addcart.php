<?php
session_start(); //初始化
$id = $_GET['id']; //获取商品id
$name = $_GET['name']; //获取商品名
$price = $_GET['price']; //获取商品单价
$upd = $_GET['upd']; //获取操作码

if ($upd == "add") {
    //session中cart变量不存在，直接存入数组
    if (empty($_SESSION['cart'])){
        $order = array();
        $order_item = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'num' => 1
        );
        array_push($order, $order_item);
        $_SESSION['cart'] = $order;
    }else{
        //session存在，判断购物车中是否已有该商品
        $order = $_SESSION['cart'];
        if (in_array($id, array_column($order, 'id'))){
            $key = array_search($id, array_column($order, 'id'));
            $order[$key]['num'] += 1; //已有，该商品数量加1
        }else{
            //没有，存入数组
            $order_item = array(
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'num' => 1
            );
            array_push($order, $order_item);
        }
        $_SESSION['cart'] = $order;
    }
    header('Location:shop.php');
}

if ($upd == "cart"){
    if (!empty($_SESSION['cart'])){
        header('Location:cart.php');
    }else{
        header('Location:shop.php');
    }
}
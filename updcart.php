<?php
session_start();
$upd = $_GET['upd']; //获取操作码
$id = $_GET['id']; //获取商品id
$order = $_SESSION['cart'];
$sum = 0;
foreach ($order as $key=>$value){
    if ($value['id'] == $id){
        switch ($upd){ //改变购物车内的商品数量
            case 0:
                if ($value['num'] > 1){
                    $order[$key]['num'] -= 1; //数量减1
                }else{
                    unset($order[$key]); //数量为0的情况下移除该数组
                }
                break;
            case 1:
                $order[$key]['num'] += 1; //数量+1
                break;
            default:
                break;
        }
        header("location:cart.php");
    }
    if ($upd == ""){
        $sum += $value['price'] * $value['num']; //计算购物车内的商品总价
        header("location:order.php"); //跳转到确认页面
    }
}

$_SESSION['num'] = array_sum(array_column($order, "num")); //购物车内的商品总量
$_SESSION['sum'] = $sum; //购物车内的商品总价
$_SESSION['cart'] = $order; //购物车内的商品信息
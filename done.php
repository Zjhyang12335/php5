<!DOCTYPE html>
<?php
session_start();
$order = $_SESSION['cart'];
$sum = $_SESSION['sum'];
$num = $_SESSION['num'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/head.css">
</head>
<body>
    <!-- 导航 -->
    <div class="head">
        <ul>
            <li><a href="./index.php">首页</a></li>
            <li><a href="./jieshao.php">店铺介绍</a></li>
            <li><a href="./food.php">美食介绍</a></li>
            <li><a href="./liliang.php">烘培力量</a></li>
            <li><a href="./news.php">留言问答</a></li>
            <!--        <li><a href="./reg.php">注册会员</a></li>-->
            <!--        <li><a href="./logout.php">退出登录</a></li>-->
            <li>
                <?php
                session_start();
                if (isset($_SESSION['user'])){
                    echo '欢迎用户';
                    echo $_SESSION['user']['username'];
                    echo '<a href="./logout.php">退出登录</a>';
                }else{
                    echo '<a href="./login.php">请登录</a>';
                }
                ?>
            </li>
        </ul>
    </div>
    <div>
        <h1>订单</h1>
        <ul>
            <li>配送至：<?php echo $_POST['address'];?></li>
<!-- 显示商品信息、商品总量和商品总价 -->
            <?php foreach ($order as $key=>$value):?>
                <li>
                    <?php echo $value['name'];?>
                    <!-- 商品名 -->
                    <span>￥<?php echo $value['price'];?></span>
                    <!-- 商品单价 -->
                    <span>x<?php echo $value['num'];?></span>
                    <!-- 商品数量 -->
                </li>
            <?php endforeach;?>
            <!-- 商品数量 -->
            <li>共<?php echo $num;?>件</li>
            <!-- 商品总价 -->
            <li>合计：￥<?php echo $sum;?></li>
        </ul>
    </div>
</body>
</html>
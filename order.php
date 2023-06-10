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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>确认订单</title>
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
        <h1>确认订单</h1>
        <hr>
        <a href="shop.php">返回商品列表</a>
        <table>
            <tr>
                <th>商品名</th>
                <th>售价</th>
                <th>数量</th>
            </tr>
            <!-- 遍历商品数组，显示商品信息 -->
            <?php foreach ($order as $key => $value):?>
            <tr>
                <td>
                    <?php echo $value['name'] ?>
                </td>
                <!-- 商品名 -->
                <td>
                    ￥
                    <?php echo $value['price'] ?>
                    <!-- 商品单价-->
                    <span>x<?php echo $value['num']; ?></span>
                    <!-- 商品数量-->
                </td>
            </tr>
        <?php endforeach; ?>
        <!-- 显示商品总量和商品总价 -->
        <tr>
            <td colspan="2">
                <span>共<?php echo $num;?>件</span>
                <!-- 商品总量 -->
                小计：￥<?php echo $sum;?>
                <!-- 商品总价 -->
            </td>
        </tr>
        </table>
        <!-- 订单地址 -->
        <form action="done.php" method="post" class="address">
            <textarea name="address" placeholder="输入地址" id="" cols="60" required></textarea>
            <input type="submit" name="提交订单">
        </form>
    </div>
</body>
</html>
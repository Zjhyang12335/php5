<!DOCTYPE html>
<?php
session_start();
$order = $_SESSION['cart'];
$num = 0;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
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
        <h1>购物车</h1>
        <hr>
        <a href="./shop.php">返回商品列表</a>
        <table>
            <tr>
                <th>商品名</th>
                <th>售价</th>
                <th>数量</th>
            </tr>
            <!-- 遍历商品数组，显示商品信息 -->
            <?php foreach ($order as $key => $value):?>
            <tr>
                <td><?php echo $value['name'] ?></td>
                <!-- 商品名 -->
                <td>￥<?php echo $value['price'] ?></td>
                <!-- 售价 -->
                <td>
                    <a class="btn" href="updcart.php?upd=0&id=<?php echo $value['id'];?>">-</a>
<!--                     商品数量 -->
                    <?php echo $value['num'];?>
                    <a class="btn" href="updcart.php?upd=1&id=<?php echo $value['id'];?>">+</a>
                </td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="4">
                    <form action="updcart.php" method="get">
                        <input type="submit" value="结算">
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
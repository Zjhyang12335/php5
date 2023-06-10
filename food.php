<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: login.php');// 如果session数据不存在，则跳转到登录页面，重新登录
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美食介绍</title>
    <link rel="stylesheet" href="./css/news.css">
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

    <div class="top">
        <div class="title">美食发布系统</div>
        <div class="nav">
            <a href="./addfood.php">发布美食</a>
        </div>
    </div>
    <div class="main">
        <table class="news-list">
            <tr>
                <th>商品名称</th>
                <th width="250">售价</th>
                <th width="200">操作</th>
            </tr>
            <?php
            require 'init.php';
            $sql = 'select id, name, price from products21180123 order by id desc';// 查询sql语句
            $stmt = $pdo->query($sql);// 执行查询语句，查询结果存储到PDOStatement对象
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);// 获取结果集，并且将结果集存储在数组data中
            ?>
            <?php foreach ($data as $v):?>
            <tr>
                <td class="news-title">
                    <a href="#"><?php echo $v['name'];?></a>
                </td>
                <td class="center"><?php echo $v['price'];?></td>
                <td class="center">
                    <a href="editfood.php?id=<?php echo $v['id'];?>">编辑</a>
                    <a href="./delfood.php?id=<?php echo $v['id'];?>" onclick="return confirm('确定删除该商品吗？');">删除</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
    <!-- 页脚模块 -->
    <div class="foot">
        @Zjhyang12335版权所有   2021-2022
    </div>
</body>
</html>
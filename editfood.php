<?php
// 连接数据库，插入数据
require 'init.php';
// 获取地址栏传递的get参数id
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$data = array('id'=>$id);// 将id存储到数组data中
// 获取表单中输入的数据
if (!empty($_POST)){

    $data['name'] = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $data['price'] = isset($_POST['price']) ? htmlspecialchars($_POST['price']) : '';

    // :name :price是占位符，名称与data数组下标一致
    $sql = 'update products21180123 set name=:name, price=:price where id=:id';
    $stmt = $pdo->prepare($sql);// 预编译sql语句
    if (!$stmt->execute($data)){
        exit('修改数据失败'.$stmt->errorInfo());
    }
    header('Location:food.php');// 重定向到留言问答列表页面
}


$sql = 'select id, name, price from products21180123 where id=:id';
$stmt = $pdo->prepare($sql);// 预编译sql语句
if (!$stmt->execute($data)){
    exit('查询数据失败'.$stmt->errorInfo());
}
// 获取查询结果，存储到数组中
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>美食发布系统</title>
    <link rel="stylesheet" href="./css/style.css"/>
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
<div class="box">
    <div class="top">
        <div class="title">美食发布系统</div>
    </div>
    <div class="main">
        <form method="post">
            <table class="news-edit">
                <tr>
                    <th>商品名称：</th>
                    <td><input type="text" name="name" value="<?php echo $data['name'];?>"/></td>
                </tr>
                <tr>
                    <th>商品售价：</th>
                    <td><input type="text" name="price" value="<?php echo $data['price'];?>" /></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="发布商品" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>

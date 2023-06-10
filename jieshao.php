<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美食介绍</title>
    <link rel="stylesheet" href="./css/news.css">
    <link rel="stylesheet" href="./css/liliang.css">
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
    <div class="content">
    <p><span style="font-size: small;"><span style="font-family: Microsoft Yahei;">很多人还不知道我们蛋糕店，<br>
        它的味道，故事和名字，只在朋友中间口碑相传。<br>
        同所有纯正的蛋糕一样，我们蛋糕店使用真正的乳脂奶油，杜绝任何色素、香精和添加剂。<br>
        一次次的旅行，一次次的寻找，一次次的尝试，挑剔近50种国外的地道原料，<br>
        我们蛋糕店，<br>
        21款经典口味。<br>
        我们蛋糕店，不止是一块蛋糕。</span></span></p>
        <p><a href="./shop.php"><img loading="lazy" src="./images/buy.jpg" alt="" width="174" height="43" data-tag="bdshare"></a></p>
    </div>
    <!-- 页脚模块 -->
    <div class="foot">
        @Zjhyang12335版权所有   2021-2022
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/index.js"></script>
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
<!-- <img id="img1" src="./images/banner.jpg" alt=""> -->
<div class="banner">
    <ul class="banner_pic" id="banner_pic">
        <li class="current"><img class="one" src="./images/banner1.jpg" alt=""></li>
        <li class="pic"><img class="one" src="./images/banner2.jpg" alt=""></li>
        <li class="pic"><img class="one" src="./images/banner3.jpg" alt=""></li>
    </ul>
    <ol id="button">
        <li class="current"></li>
        <li class="but"></li>
        <li class="but"></li>
    </ol>
</div>
<!-- 产品展示 -->
<div class="zhanshi">
    <div class="zhanshidiv">
        <div>
            <img src="./images/con1.jpg">
            <span id="b1">爱的N次方</span>
            <span id="b2">马卡龙</span>
            <span id="b3">价格：</span><span id="b4">62元</span>
        </div>
        <div>
            <img src="./images/con2.jpg">
            <span id="b1">果肉果冻</span>
            <span id="b2">双色马卡龙</span>
            <span id="b3">价格：</span><span id="b4">40元</span>
        </div>
        <div>
            <img src="./images/con3.jpg">
            <span id="b1">芒果味</span>
            <span id="b2">布丁马卡龙</span>
            <span id="b3">价格：</span><span id="b4">30元</span>
        </div>
        <div>
            <img src="./images/con4.jpg">
            <span id="b1">果冻荔枝味</span>
            <span id="b2">多彩马卡龙</span>
            <span id="b3">价格：</span><span id="b4">30元</span>
        </div>
        <div>
            <img src="./images/con5.jpg">
            <span id="b1">果味巧克力</span>
            <span id="b2">西式甜点</span>
            <span id="b3">价格：</span><span id="b4">30元</span>
        </div>
        <div>
            <img src="./images/con6.jpg">
            <span id="b1">奶油水果</span>
            <span id="b2">提拉米苏</span>
            <span id="b3">价格：</span><span id="b4">30元</span>
        </div>
        <div>
            <img src="./images/con7.jpg">
            <span id="b1">玫瑰花型</span>
            <span id="b2">布丁</span>
            <span id="b3">价格：</span><span id="b4">30元</span>
        </div>
        <div>
            <img src="./images/con8.jpg">
            <span id="b1">燕麦奶油</span>
            <span id="b2">芝士蛋糕</span>
            <span id="b3">价格：</span><span id="b4">30元</span>
        </div>
    </div>
</div>
<!-- 表单模块 -->
<div class="content">
    <h2>下单信息</h2>
    <form action="./shop.php" method="post">
        <p><h3>选择产品</h3></p>
        <table>
            <tr>
                <input type="checkbox" name="" id="">爱的N次方
                <input type="checkbox" name="" id="">果肉果冻
                <input type="checkbox" name="" id="">芒果味
                <input type="checkbox" name="" id="">果冻荔枝味
            </tr><br>
            <tr>
                <input type="checkbox" name="" id="">果味巧克力
                <input type="checkbox" name="" id="">奶油水果
                <input type="checkbox" name="" id="">玫瑰花型
                <input type="checkbox" name="" id="">燕麦奶油
            </tr>
        </table>
        <p>收货人<input type="text" name="name" id="" maxlength="6"></p>
        <!-- <p>密码<input type="password" name="pass" id="pass" size="20"></p> -->
        <p>手机号码<input type="tel" pattern="^\d{11}$" name="tel" id=""></p>
        <!-- <p>邮箱地址<input type="email" name="" id=""></p> -->
        <p>收货地址<input type="text" name="address" id=""></p>
        <p>订单备注<textarea name="note" id="" cols="30" rows="10"></textarea></p>
        <!-- <input type="submit" value="注册" class="reg"> -->
        <!-- <input type="submit" value="登录" class="login"> -->
        <input type="reset" value="重置">
        <input type="submit" value="前往下单">
    </form>
</div>

<!-- 页脚模块 -->
<div class="foot">
    @Zjhyang12335版权所有   2021-2022
</div>
</body>
</html>
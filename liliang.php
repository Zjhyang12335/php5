<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>烘培力量</title>
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
        <p><span style="font-size: small;"> &nbsp; &nbsp; &nbsp;我们坚持选用来自新西兰的天然乳脂奶油，并且在艺术上同样坚持美感与质感俱善，所有原材料均选用地道极品，近50种源自国外，并由我们亲自挑选、加工。<br>
            来自新西兰的奶油和来自比利时的巧克力，是蛋糕最纯正的选择，也是蓝天白云和浪漫温馨的异国情怀；来自美国或土耳其的榛子、新西兰的猕猴桃和金果、美国的 黑樱桃，是水果坚果中的极品；来自牙买加的摩根船长朗姆酒、爱尔兰百利甜酒，还有上品的白兰地、樱桃酒和咖啡酒调出风味，更加令人倾倒……我们其实明白， 如果这一切都从国内选购，一定能轻松很多，当然，那样也就不会有与众不同的我们。<br>
            与很多你曾经吃过的蛋糕坯子的单调口味相比，我们的每一款蛋糕必须用原料烘烤蛋糕坯，如果我不说，你一定不会知道，但味蕾不会欺骗你。比如栗蓉暗香真的用上好栗子来烘烤蛋糕坯……坯子各具精髓和风味，宛如真爱，多样但永远唯一。<br>
            <span style="font-family: Microsoft Yahei;"><br>
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 在欧洲传统工艺的基础上，充分发挥创意，原创全新而时尚的口味。<br>
            <span style="font-family: Microsoft Yahei;"><br>
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 我们尊重并了解，蛋糕时尚性的根本驱动力是创意和产品。在配方、口味、形制等任何细节，我们从未停止对新产品和新口味的信仰和研判，至今已诞生数十种独创品类。同时，我们从全球范围内的材质精选、制作工艺、后期服务等方面为实现创意做出保证。<br>
            <span style="font-family: Microsoft Yahei;"><br>
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 杜绝任何色素、添加剂与防腐剂。<br>
            <span style="font-family: Microsoft Yahei;"><br>
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 我们认为，真正的自然美味，均有其自身的生命规律，人力智慧应该用在如何保护食物的天然本色上，这样做，不只是为了健康，更是尊重每一种精心挑选的地道食材。</span></p>
    </div>
    <!-- 页脚模块 -->
    <div class="foot">
        @Zjhyang12335版权所有   2021-2022
    </div>
</body>
</html>
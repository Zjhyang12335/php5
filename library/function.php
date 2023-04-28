<?php
function checkLogin(){
    session_start();
    if (!isset($_SESSION['user'])){
        header('Location: login.php');// 如果session数据不存在，则跳转到登录页面，重新登录
        exit;
    }
    return isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 0;
}
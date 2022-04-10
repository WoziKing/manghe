<?php
if($_GET['name']=='admin' && $_GET['pwd']=='123456'){
    echo '<script>window.location.href="./index1.html";</script>';
    exit();
}else{
    echo '<script>alert("账号或密码错误");window.location.href="index.html";</script>';
    exit();
}
?>
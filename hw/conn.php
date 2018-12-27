<?php
/**
 * Created by IntelliJ IDEA.
 * User: 叶学谦
 * Date: 2018/12/25
 * Time: 12:12
 */
    $hostname = "127.0.0.1";
    $database = "test";
    $username = "root";
    $password = "123456";

    $conn = new mysqli($hostname, $username, $password, $database);
    if($conn->connect_error){
        echo '数据库连接失败！';
        return;
    }
?>
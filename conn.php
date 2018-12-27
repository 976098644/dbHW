<?php
/**
 * Created by IntelliJ IDEA.
 * User: 叶学谦
 * Date: 2018/11/16
 * Time: 20:53
 */
    $hostname = "127.0.0.1";
    $database = "test";
    $username = "root";
    $password = "123456";

    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
        echo "failed";
    }
?>
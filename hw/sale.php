<?php
/**
 * Created by IntelliJ IDEA.
 * User: 叶学谦
 * Date: 2018/12/27
 * Time: 20:48
 */
    include "conn.php";
    $para = $_POST['pid'];
    $sql = "call report_monthly_sale('$para')";
    $res = $conn->query($sql);
    header('Content-type:application/json; charset=utf-8');
    if($res){
        $dbrow = $res->fetch_assoc();
    }else{
        $dbrow = "获取数据失败！请重试！";
    }
    echo json_encode($dbrow);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新数据库</title>
</head>
<body>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: 叶学谦
 * Date: 2018/11/18
 * Time: 20:35
 */
    include "conn.php";
    $type = $_GET['type'];
    if ($type == 'emp2016190094'){
        $qw = $_GET['empno'];
        $sql = "delete from emp2016190094 where empno = " . $qw;
        echo "<h1 style='text-align: center'>删除成功!<a href='read.php'>返回</a></h1>";
        $res = $conn->query($sql);
        if ($res)
            echo " <script language=javascript>window.alert('删除成功,请返回');history.back();</script>";
        else
            echo "<script language=javascript>window.alert('删除失败,请返回');history.back();</script>";
    } elseif($type == 'dept2016190094') {
        $qw = $_GET['deptno'];
        $sql = "delete from dept2016190094 where deptno = " . $qw;
        $res = $conn->query($sql);
        if ($res)
            echo " <script language=javascript>window.alert('删除成功,请返回');history.back();</script>";
        else
            echo "<script language=javascript>window.alert('删除失败,请返回');history.back();</script>";
    }
?>
</body>
</html>

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
 * Date: 2018/11/22
 * Time: 20:55
 */
include 'conn.php';
$type = $_POST['type'];
if ($type == "emp2016190094") {
    $empno = $_POST['empno'];
    $ename = strtoupper($_POST['ename']);
    $job = strtoupper($_POST['job']);
    $mgr = $_POST['mgr'];
    $hiredate = $_POST['hiredate'];
    $sal = $_POST['sal'];
    $comm = $_POST['comm'];
    $deptno = $_POST['deptno'];
    $query = "Update emp2016190094 set ename='$ename',job='$job',mgr='$mgr',hiredate='$hiredate',sal='$sal',comm='$comm',deptno='$deptno' where empno=$empno";
    $res = $conn->query($query);
    if ($res)
        echo " <script language=javascript>window.alert('修改成功,请返回');history.go(-2);</script>";
    else
        echo "<script language=javascript>window.alert('修改失败,请返回');history.back();</script>";
} elseif ($type == "dept2016190094") {
    $dname = strtoupper($_POST['dname']);
    $loc = strtoupper($_POST['loc']);
    $deptno = $_POST['deptno'];
    $query = "Update dept2016190094 set dname='$dname',loc='$loc' where deptno='$deptno'";
    $res = $conn->query($query);
    if ($res)
        echo " <script language=javascript>window.alert('修改成功,请返回');history.go(-2);</script>";
    else
        echo "<script language=javascript>window.alert('修改失败,请返回');history.back();</script>";
}
?>
</body>
</html>

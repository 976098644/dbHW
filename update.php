<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新数据库</title>
    <style>
        a{
            display: block;
            text-align: center;
        }
    </style>
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
if ($type == 'emp2016190094') {
    $qw = $_GET['empno'];
    $sql = "select * from emp2016190094 where empno = $qw";
    $res = $conn->query($sql);
    $row = mysqli_num_rows($res);
    if ($row) {
        $dbrow = mysqli_fetch_array($res);
        $empno = $dbrow['empno'];
        $ename = $dbrow['ename'];
        $job = $dbrow['job'];
        $mgr = $dbrow['mgr'];
        $hiredate = $dbrow['hiredate'];
        $sal = $dbrow['sal'];
        $comm = $dbrow['comm'];
        $deptno = $dbrow['deptno'];
?>
        <table cellpadding='5' align='center' border='3' bgcolor='#f5f5dc' style='text-align: center'>
            <caption>emp2016190094</caption>
            <tr>
            <th>empno</th>
            <th>ename</th>
            <th>job</th>
            <th>mgr</th>
            <th>hiredate</th>
            <th>sal</th>
            <th>comm</th>
            <th>deptno</th>
            <th>&nbsp;</th>
            </tr>
<?php
        echo "<form action='save.php' method='post'>
            <tr><td>$empno</td>
            <td><input style='text-align: center' name='ename' type='text' value='$ename'></td>
            <td><input style='text-align: center' name='job' type='text' value='$job'></td>
            <td><input style='text-align: center' name='mgr' type='text' value='$mgr'></td>
            <td><input style='text-align: center' name='hiredate' type='text' value='$hiredate'></td>
            <td><input style='text-align: center' name='sal' type='text' value='$sal'></td>
            <td><input style='text-align: center' name='comm' type='text' value='$comm'></td>
            <td><input style='text-align: center' name='deptno' type='text' value='$deptno'></td>
            <td><input type='hidden' name='type' value='emp2016190094'>
            <input type='hidden' name='empno' value='$empno'>
            <input type='submit'></td></tr></form>";
        echo "</table>\n";
        echo "<a href='read.php'>返回</a><hr />\n";
    }
} elseif ($type == 'dept2016190094') {
    $qw = $_GET['deptno'];
    $sql = "select * from dept2016190094 where deptno = $qw";
    $res = $conn->query($sql);
    $row = mysqli_num_rows($res);
    if ($row){
        echo "
        <table cellpadding='5' align='center' border='3' bgcolor='#f5f5dc' style='text-align: center'>
        <caption>dept2016190094</caption>
        <tr>
            <th>deptno</th>
            <th>dname</th>
            <th>loc</th>
            <th>&nbsp;</th>
        </tr>";
        $dbrow = mysqli_fetch_array($res);
        $deptno = $dbrow['deptno'];
        $dname = $dbrow['dname'];
        $loc = $dbrow['loc'];
        echo "<form action='save.php' method='post'>
            <tr><td>$deptno</td>
            <td><input style='text-align: center' name='dname' type='text' value='$dname'></td>
            <td><input style='text-align: center' name='loc' type='text' value='$loc'></td>
            <td><input type='hidden' name='type' value='dept2016190094'>
            <input type='hidden' name='deptno' value='$deptno'>
            <input type='submit'></td></tr></form>";
        echo "</table>\n";
        echo "<a href='read.php'>返回</a><hr />\n";
    }
}
?>
</body>
</html>

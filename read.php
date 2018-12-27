<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>数据库</title>
    <style>
        a{
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include "conn.php";
$query1 = "select * from dept2016190094";
$res = $conn->query($query1);
$row = mysqli_num_rows($res);
if ($row){
    echo "
        <div>
        <a id='btn1' href='javascript:void(0);'>dept2016190094</a>
        <table  id='table1' cellpadding='5' align='center' border='3' bgcolor='#f5f5dc' style='text-align: center;display: none'>
        <tr>
            <th>deptno</th>
            <th>dname</th>
            <th>loc</th>
            <th>功能</th>
            <th>功能</th>
        </tr>";
    while ($row--){
        $dbrow = mysqli_fetch_array($res);
        $deptno = $dbrow['deptno'];
        $dname = $dbrow['dname'];
        $loc = $dbrow['loc'];
        echo "<tr>";
        echo "<td>" . $deptno . "</td>";
        echo "<td>" . $dname . "</td>";
        echo "<td>" . $loc . "</td>";
        $type = "dept2016190094";
        echo "<td><a href='update.php?type=$type&deptno=$deptno'>update</a></td>";
        echo "<td><a href='del.php?type=$type&deptno=$deptno'>del</a></td></tr>\n";
    }
    echo "<form action='insert.php' method='post'>
                <tr><td><input style='text-align: center' name='deptno' type='text'></td>
                <td><input style='text-align: center' name='dname' type='text'></td>
                <td><input style='text-align: center' name='loc' type='text'></td>
                <td colspan='2'><input type='hidden' name='type' value='dept2016190094'>
                <input type='submit' value='插入'></td></tr></form>";
    echo "</table></div><hr />";
}
$query2 = "select * from emp2016190094";
$res = $conn->query($query2);
$row = mysqli_num_rows($res);
if ($row) {
    echo "<div>
            <a id='btn2' href='javascript:void(0);'>emp2016190094</a>
            <table id='table2' cellpadding='5' align='center' border='3' bgcolor='#f5f5dc' style='text-align: center;display: none'>
            <tr>
            <th>empno</th>
            <th>ename</th>
            <th>job</th>
            <th>mgr</th>
            <th>hiredate</th>
            <th>sal</th>
            <th>comm</th>
            <th>deptno</th>
            <th>功能</th>
            <th>功能</th>
            </tr>";
}
while ($row--){
    $dbrow = mysqli_fetch_array($res);
    $empno = $dbrow['empno'];
    $ename = $dbrow['ename'];
    $job = $dbrow['job'];
    $mgr = $dbrow['mgr'];
    $hiredate = $dbrow['hiredate'];
    $sal = $dbrow['sal'];
    $comm = $dbrow['comm'];
    $deptno = $dbrow['deptno'];
    echo "<tr>";
    echo "<td>" . $empno . "</td>";
    echo "<td>" . $ename . "</td>";
    echo "<td>" . $job . "</td>";
    echo "<td>" . $mgr . "</td>";
    echo "<td>" . $hiredate . "</td>";
    echo "<td>" . $sal . "</td>";
    echo "<td>" . $comm . "</td>";
    echo "<td>" . $deptno . "</td>";
    $type = "emp2016190094";
    echo "<td><a href='update.php?type=$type&empno=$empno'>update</a></td>";
    echo "<td><a href='del.php?type=$type&empno=$empno'>del</a></td></tr>\n";
}
echo "<form action='insert.php' method='post'>
            <tr><td><input style='text-align: center' name='empno' type='text'></td>
            <td><input style='text-align: center' name='ename' type='text'></td>
            <td><input style='text-align: center' name='job' type='text'></td>
            <td><input style='text-align: center' name='mgr' type='text'></td>
            <td><input style='text-align: center' name='hiredate' type='text'></td>
            <td><input style='text-align: center' name='sal' type='text'></td>
            <td><input style='text-align: center' name='comm' type='text'></td>
            <td><input style='text-align: center' name='deptno' type='text'></td>
            <td colspan='2'><input type='hidden' name='type' value='emp2016190094'>
            <input type='submit'></td></tr></form>";
echo "</table></div><hr />\n"
?>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.8.0/jquery.js"></script>
<script>
    $(function () {
        $("#btn1").toggle(
            function () {
                $(this).text("dept2016190094");
                $("#table1").show(1000);
            },
            function () {
                $(this).text("dept2016190094");
                $("#table1").hide(1000);
            }
        )
        $("#btn2").toggle(
            function () {
                $(this).text("emp2016190094");
                $("#table2").show(1000);
            },
            function () {
                $(this).text("emp2016190094");
                $("#table2").hide(1000);
            }
        )
    })
</script>
</body>
</html>

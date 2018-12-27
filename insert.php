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
     * Time: 21:39
     */
    include "conn.php";
    $type = $_POST['type'];
    if ($type == "dept2016190094") {
        $deptno = $_POST['deptno'];
        $loc = strtoupper($_POST['loc']);
        $dname = strtoupper($_POST['dname']);
        $sql = "INSERT INTO dept2016190094 (deptno, dname, loc) VALUES ('$deptno', '$dname','$loc')";
        $res = $conn->query($sql);
        if ($res)
            echo " <script language=javascript>window.alert('插入成功,请返回');history.back();</script>";
        else
            echo "<script language=javascript>window.alert('插入失败,请返回');history.back();</script>";
    } elseif ($type == "emp2016190094") {
        $empno = $_POST['empno'];
        $ename = strtoupper($_POST['ename']);
        $job = strtoupper($_POST['job']);
        $mgr = $_POST['mgr'];
        $hiredate = $_POST['hiredate'];
        $sal = $_POST['sal'];
        $comm = $_POST['comm'];
        if ($comm == NULL)
            $comm = 'NULL';
        $deptno = $_POST['deptno'];
        $sql = "INSERT INTO emp2016190094(empno, ename, job, mgr, hiredate, sal, comm, 	deptno) VALUES($empno, '$ename', '$job', $mgr, '$hiredate', $sal, $comm, $deptno);";
        $res = $conn->query($sql);
        if ($res)
            echo " <script language=javascript>window.alert('插入成功,请返回');history.back();</script>";
        else
            echo "<script language=javascript>window.alert('插入失败,请返回');history.back();</script>";
        }
    ?>
</body>
</html>

<?php
/**
 * Created by IntelliJ IDEA.
 * User: 叶学谦
 * Date: 2018/12/25
 * Time: 19:32
 */
include 'conn.php';
$para = $_POST['tablename'];
$sql = 'call show_' . $para . '()';
$res = $conn->query($sql);
if($res){
    header('Content-type:application/json; charset=utf-8');
    $row = $res->num_rows;
    $array = array();
    while($row--) {
        $dbrow = $res->fetch_row();
        array_push($array, $dbrow);
    }
    echo json_encode($array);
}
?>
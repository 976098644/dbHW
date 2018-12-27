<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>时间</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Shanghai');
    $d1 = date_create();
    $d2 = date_create('2017/12/25');
    echo "<p style='text-align: center'>";
    echo "今天日期：";
    echo $d1->format('Y-m-d') . "<br />";
    echo "2017年圣诞节：";
    echo $d2->format('Y-m-d') . "<br />";
    echo "两者相差：";
    echo  date_diff($d2, $d1)-> days. "天<br />";
    echo "</p>";
    ?>
<hr />
</body>
</html>


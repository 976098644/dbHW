<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>字符串比较结果</title>
</head>
<body>
    <form style="text-align: center " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>字符串1：<input type="text" name="str1"></h2>
        <h2>字符串2：<input type="text" name="str2"></h2>
        <input type="submit" value="submit">提交</input>
    </form>
    <hr />
    <?php
    if (isset($_GET["str1"])){
        $s1 = $_GET["str1"];
        $s2 = $_GET["str2"];
        $l1 = strlen($s1);
        $l2 = strlen($s2);
        $a = array();
        for ($i = 0; $i<=$l1; $i++)
            $a[$i][0] = 0;
        for ($j = 1; $j<=$l2; $j++)
            $a[0][$j] = 0;
        $max = 0;
        $p = 0;
        for ($i = 0; $i<$l1; $i++)
            for ($j = 0; $j<$l2; $j++){
                if ($s1[$i] == $s2[$j])
                    $a[$i+1][$j+1] = $a[$i][$j] +1;
                else
                    $a[$i+1][$j+1] = 0;
                if ($max<$a[$i+1][$j+1]) {
                    $max = $a[$i + 1][$j + 1];
                    $p = $i+1;
                }
            }
        echo "<p style='text-align: center'>";
        echo "字符串1：" . $s1 . "<br/>";
        echo "字符串2：" . $s2 . "<br/>";
        echo "字符串比较结果: ";
        for ($i = $p-$max; $i<$p; $i++)
            echo $s1[$i];
        echo "</p>";
    }?>
<hr />
</body>
</html>

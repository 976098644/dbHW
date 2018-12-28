<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>购买页面</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <style>
        .col-center-block {
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div class="col-center-block">
    <form class="form-horizontal" role="form">
        <h3 style="text-align: center">购物车</h3>
        <div class="form-group">
            <label class="col-sm-4 control-label">pid</label>
            <h4 class="col-sm-4">
                <?php echo $_GET['pid'];?>
            </h4>
        </div>
        <div class="form-group">
            <label for="pname" class="col-sm-4 control-label">pname</label>
            <h4 class="col-sm-4">
                <?php echo $_GET['pname'];?>
            </h4>
        </div>
        <div class="form-group">
            <label for="original_price" class="col-sm-4 control-label">price</label>
            <h4 class="col-sm-4">
                <?php echo $_GET['price'];?>
            </h4>
        </div>
        <div class="form-group">
            <label for="cid" class="col-sm-4 control-label">cid</label>
            <div class="col-sm-4">
                <select class="form-control" id="cid">
                    <?php
                    include 'conn.php';
                    $sql = "select cid, cname from `customers`;";
                    $res = $conn->query($sql);
                    $row = $res->num_rows;
                    if($res){
                        while($row--) {
                            $dbrow = $res->fetch_assoc();
                            $eid = $dbrow['cid'];
                            $ename = $dbrow['cname'];
                            echo "<option>$eid $ename</option>\n";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="eid" class="col-sm-4 control-label">eid</label>
            <div class="col-sm-4">
                <select class="form-control" id="eid">
                    <?php
                    $sql = "select eid, ename from `employees`;";
                    $res = $conn->query($sql);
                    $row = $res->num_rows;
                    if($res){
                        while($row--) {
                            $dbrow = $res->fetch_assoc();
                            $eid = $dbrow['eid'];
                            $ename = $dbrow['ename'];
                            echo "<option>$eid $ename</option>\n";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="qoh" class="col-sm-4 control-label">qoh</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="qoh"
                       placeholder="qoh">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="button" class="btn btn-default" onclick="buy()">确定购买</button>
            </div>
        </div>
    </form>
</div>
<script>
    function buy() {
        var cid = $('#cid option:selected').text().split(' ')[0];
        var eid = $('#eid option:selected').text().split(' ')[0];
        var qoh = $('#qoh').val();
        $.post('add.php', {'cid':cid, 'eid':eid, 'qoh':qoh},alert('yes'));
    }
</script>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>


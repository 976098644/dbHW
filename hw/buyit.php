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
            <label for="pid" class="col-sm-4 control-label">pid</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="pid"
                       placeholder="pid">
            </div>
        </div>
        <div class="form-group">
            <label for="pname" class="col-sm-4 control-label">pname</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="pname"
                       placeholder="pname">
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
            <label for="qoh_threshold" class="col-sm-4 control-label">qoh_threshold</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="qoh_threshold"
                       placeholder="qoh_threshold">
            </div>
        </div>
        <div class="form-group">
            <label for="original_price" class="col-sm-4 control-label">original_price</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="original_price"
                       placeholder="original_price">
            </div>
        </div>
        <div class="form-group">
            <label for="discnt_cnt" class="col-sm-4 control-label">discnt_cnt</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="discnt_cnt"
                       placeholder="discnt_cnt">
            </div>
        </div>
        <div class="form-group">
            <label for="sid" class="col-sm-4 control-label">sid</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="sid"
                       placeholder="sid">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" class="btn btn-default">确定购买</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>


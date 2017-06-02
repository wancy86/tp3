<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/public/bootstrap.min.css">
    <script src="/public/bootstrap.min.js"></script>
    <script src="/public/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- header -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Example page header <small>Subtext for header</small></h1>
                </div>
            </div>
        </div>
        <!-- main -->
        <div class="row">
            <div class="col-md-12">
                <!-- sidebar -->
                <div class="col-md-2 col-sm-2 col-md-offset-1">
                    <ul class="list-group">
                        <li class="list-group-item active">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
                <!-- content -->
                <div class="col-md-8 col-sm-8">
                    <FORM class="form" method="post" action="/index.php/Home/Form/insert">
                        标题：
                        <INPUT type="text" name="title">
                        <br/> 内容：
                        <TEXTAREA name="content" rows="5" cols="45"></TEXTAREA>
                        <br/>
                        <INPUT type="submit" value="提交">
                    </FORM>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="row" style="margin-top: 90%;">
            <div class="col-md-12 text-center">
                <div class="well">Copyright © 2017 CoMark</div>
            </div>
        </div>
    </div>
</body>

</html>
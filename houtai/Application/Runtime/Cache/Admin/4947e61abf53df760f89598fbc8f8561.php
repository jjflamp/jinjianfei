<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>登录页面 </title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->
    <link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/admin/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!-- page specific plugin styles -->
    <!-- fonts -->
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->
    <!-- ace styles -->

    <link rel="stylesheet" href="/Public/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/Public/admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="/Public/js/jquery-2.0.2.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <!--登录-->
                                <!--<i class="icon-leaf red"></i>-->
                                <span class="block">后台登录系统</span>
                                <span class="white"></span>
                            </h1>
                            <h4 class="blue">&copy; 后台</h4>
                        </div>

                        <div class="space-1"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            <i class="icon-coffee green"></i>
                                            请填写正确的用户名密码
                                        </h4>

                                        <div class="space-6"></div>

                                        <form >
                                            <fieldset>
                                                <label class="block clearfix">
                                                            <span class="block input-icon input-icon-left">
                                                                <i class="icon-user"></i>
                                                                <input type="text" name="username" class="form-control" />
                                                            </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                    <i class="icon-lock"></i>
                                                                <input type="password" name="pwd" class="form-control" />
                                                            </span>
                                                </label>

                                                <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="verify"  class="form-control-small" />
                                                                <img src="<?php echo U('login/verify');?>" onclick="this.src=this.src+'?'+Math.random()"  alt="" width="110px" >
                                                            </span>
                                                </label>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> 记住我 </span>
                                                    </label>

                                                    <button  type="button" class="width-100 pull-center btn btn-sm btn-primary" onclick="login.check()"><i class="icon-key"></i>登录</button>
                                                </div>

                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>

                                        <div class="social-or-login center">
                                            <span class="bigger-110">Or Login Using</span>
                                        </div>

                                        <div class="social-login center">
                                            <a class="btn btn-primary">
                                                <i class="icon-facebook"></i>
                                            </a>

                                            <a class="btn btn-info">
                                                <i class="icon-twitter"></i>
                                            </a>

                                            <a class="btn btn-danger">
                                                <i class="icon-google-plus"></i>
                                            </a>
                                        </div>
                                    </div><!-- /widget-main -->

                                </div><!-- /widget-body -->
                            </div><!-- /login-box -->

                        </div><!-- /position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.main-container -->
<!--提示弹框js-->
<script src="/Public/js/dialog/layer.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/js/admin/login.js"></script>
<!--提示弹框js end-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
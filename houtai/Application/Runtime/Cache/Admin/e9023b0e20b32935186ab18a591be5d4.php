<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>控制台 后台管理系统</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->
    <link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/admin/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/dropzone.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->
    
    <link rel="stylesheet" href="/Public/admin/assets/css/my.css">

    <!-- fonts -->


    <!-- ace styles -->

    <link rel="stylesheet" href="/Public/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/Public/admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/Public/admin/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/Public/admin/assets/js/html5shiv.js"></script>
    <script src="/Public/admin/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--后台头导航开始-->
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    后台管理系统
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            还有4个任务完成
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">软件更新</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">硬件更新</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">单元测试</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">错误修复</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看任务详情
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8条通知
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                切换为编辑登录..
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看所有通知
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5条消息
                        </li>

                        <li>
                            <a href="#">
                                <img src="/Public/admin/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/Public/admin/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/Public/admin/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                查看所有消息
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/Public/admin/assets/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
									<small>欢迎光临,</small>
									Jason
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="/index.php/Index/person">
                                <i class="icon-user"></i>
                                个人资料
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="/index.php/Public/logout">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>
<!--后台头导航结束-->

<!--后台左导航栏开始-->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li class="active">
                    <a href="/index.php/index/datetime">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 控制台 </span>
                    </a>
                </li>


                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> 会员管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="/index.php/Admin/user/index">
                                <i class="icon-double-angle-right"></i>
                                会员浏览
                            </a>
                        </li>

                        <li>
                            <a href="/index.php/Admin/user/add">
                                <i class="icon-double-angle-right"></i>
                                会员添加
                            </a>
                        </li>
                        <li>
                            <a href="/index.php/Admin/user/delete">
                                <i class="icon-double-angle-right"></i>
                                会员回收站
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> 权限管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="/index.php/Admin/admin/index">
                                <i class="icon-leaf"></i>
                                管理员列表
                            </a>
                        </li>

                        <li>
                            <a href="/index.php/Admin/admin/add">
                                <i class="icon-double-angle-right"></i>
                                角色管理
                            </a>
                        </li>

                        <li>
                            <a href="/index.php/Admin/admin/rule">
                                <i class="icon-double-angle-right"></i>
                                管理员日志
                            </a>
                        </li>
                    </ul>
                </li>

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 导航管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Nav/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览导航信息-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Nav/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加导航信息-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="/index.php/Type/index" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 版块管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Type/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览所有版块-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Type/add1">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加根版块-->
                            <!--</a>-->
                        <!--</li>-->

                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 帖子管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Card/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览帖子-->
                            <!--</a>-->
                        <!--</li>-->

                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 评论管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Comment/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览回复信息-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 帖子审核 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Verify/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--主题审核-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Verify/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--回复审核-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 数据统计 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Total/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--数据统计浏览-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 敏感词管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Filter/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--敏感词处理-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 举报管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Inform/index1">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览被举报的帖子-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Inform/index2">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览被举报的评论-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 置顶管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Cardtop/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览置顶帖子-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Cardtop/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加置顶帖子-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-edit"></i>-->
                        <!--<span class="menu-text"> 精华管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Essence/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览精华帖子-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Essence/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加精华帖子-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 链接管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Sharelikes/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--浏览链接-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Sharelikes/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加链接-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 公告管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Announce/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--公告列表-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Announce/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加公告-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 勋章管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Medalinfo/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--勋章列表-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Medalinfo/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加勋章-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 信息管理 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Message/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--信息列表-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Message/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加信息-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 积分规则 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Point/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--积分规则表-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Point/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--添加规则-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-list"></i>-->
                        <!--<span class="menu-text"> 广告规则 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="/index.php/Ads/index">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--广告列表-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="/index.php/Ads/add">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--广告添加-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="widgets.html">-->
                        <!--<i class="icon-list-alt"></i>-->
                        <!--<span class="menu-text"> 插件 </span>-->
                    <!--</a>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="/index.php/Index/dateTime">-->
                        <!--<i class="icon-calendar"></i>-->

                        <!--<span class="menu-text">-->
									<!--日历-->
                            <!--&lt;!&ndash;<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">-->
                                <!--<i class="icon-warning-sign red bigger-130"></i>-->
                            <!--</span>&ndash;&gt;-->
								<!--</span>-->
                    <!--</a>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="/index.php/Index/photo">-->
                        <!--<i class="icon-picture"></i>-->
                        <!--<span class="menu-text"> 相册 </span>-->
                    <!--</a>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-tag"></i>-->
                        <!--<span class="menu-text"> 更多页面 </span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="profile.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--用户信息-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="inbox.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--收件箱-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="pricing.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--售价单-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="invoice.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--购物车-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="timeline.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--时间轴-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="login.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--登录 &amp; 注册-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->

                <!--<li>-->
                    <!--<a href="#" class="dropdown-toggle">-->
                        <!--<i class="icon-file-alt"></i>-->

                        <!--<span class="menu-text">-->
									<!--其他页面-->
									<!--<span class="badge badge-primary ">5</span>-->
								<!--</span>-->

                        <!--<b class="arrow icon-angle-down"></b>-->
                    <!--</a>-->

                    <!--<ul class="submenu">-->
                        <!--<li>-->
                            <!--<a href="faq.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--帮助-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="error-404.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--404错误页面-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="error-500.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--500错误页面-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="grid.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--网格-->
                            <!--</a>-->
                        <!--</li>-->

                        <!--<li>-->
                            <!--<a href="blank.html">-->
                                <!--<i class="icon-double-angle-right"></i>-->
                                <!--空白页面-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
            </ul><!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        
    <block name="main-content">
        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="/index.php/admin">后台主页</a>
                    </li>

                    <li>
                        <a href="#">会员管理</a>
                    </li>
                    <li class="active">会员下级表</li>
                </ul><!--位置导航 -->
            </div>

            <div class="page-content">

                <!--<div class="page-header">-->
                <form class="navbar-form form-inline" action="<?php echo U('Admin/index');?>" method="post">
                    <div class="form-group">
                        <input type="text" name="keywords" class="form-control" placeholder="搜索">
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                    <div class="form-group pull-right">
                        <a href="<?php echo U('User/add');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加会员</a>
                    </div>
                </form>
                <!--</div>-->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-responsive">
                                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>级别</th>
                                            <th>编号</th>
                                            <th>姓名</th>
                                            <th>性别</th>
                                            <th>年龄</th>
                                            <th>邮箱</th>
                                            <th>手机</th>
                                            <th>上级</th>
                                            <th>积分</th>
                                            <th>状态</th>
                                            <th>创建时间</th>
                                        </tr>
                                        <tr>
                                            <tr>
                                            <td style="width:90px" >
                                                <div class="operat hidden1 icon-group"> 父 级</div>
                                            </td>
                                            <td><?php echo ($v['num']); ?></td>
                                            <td><?php echo ($v['name']); ?></td>
                                            <td>
                                                <?php if($v["sex"] == 0): ?><span class='label label-sm label-danger'> 女</span><?php else: ?><span class='label label-sm label-success'>男</span><?php endif; ?>
                                            </td>
                                            <td><?php echo (getDa($v['birthday'])); ?></td>
                                            <td><?php echo ($v['email']); ?></td>
                                            <td><?php echo ($v['phone']); ?></td>
                                            <td><?php echo ((isset($arr[$v['uid']]) && ($arr[$v['uid']] !== ""))?($arr[$v['uid']]):'顶 级'); ?></td>
                                            <td><?php echo ($v['total']); ?></td>
                                            <td>
                                                <?php if($vo["status"] == 0): ?><i style="color:darkred">冻结</i><?php elseif($vo["status"] == 1): ?><i style="color:green;">启用</i><?php else: ?><i style="color:red">已删除</i><?php endif; ?>
                                            </td>
                                            <td><?php echo ($v['create_time']); ?></td>

                                        </tr>

                                        </tr>
                                        </thead>

                                        <tbody >
                                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                                <td style="width:70px;text-align:right" >
                                                    <div class="operat icon-double-angle-right" >子 级</div>
                                                </td>
                                                <td><?php echo ($vo['num']); ?></td>
                                                <td><?php echo ($vo['name']); ?></td>
                                                <td>
                                                    <?php if($vo["sex"] == 0): ?><span class='label label-sm label-danger'> 女</span><?php else: ?><span class='label label-sm label-success'>男</span><?php endif; ?>
                                                </td>
                                                <td><?php echo (getDa($vo['birthday'])); ?></td>
                                                <td><?php echo ($vo['email']); ?></td>
                                                <td><?php echo ($vo['phone']); ?></td>
                                                <td><?php echo ($arr[$vo['uid']]); ?></td>
                                                <td><?php echo ($vo['total']); ?></td>
                                                <td>
                                                    <?php if($vo["status"] == 0): ?><i style="color:darkred">冻结</i><?php elseif($vo["status"] == 1): ?><i style="color:green;">启用</i><?php else: ?><i style="color:red">已删除</i><?php endif; ?>
                                                </td>
                                                <td><?php echo ($vo['create_time']); ?></td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                    </table>


                                </div><!-- /.table-responsive -->
                            </div><!-- /span -->
                        </div><!-- /row -->

                        <div class="hr hr-18 dotted hr-double"></div>


                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->
        <script>
            var SCOPE={
                'save_url' : "/index.php/Admin/User/lock",
                'look_url' : '/index.php/Admin/User/look',
                'status_url' : '/index.php/Admin/User/setStatus',

            }

        </script>
    
        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
<!--后台左导航栏结束-->

<!--导入js开始-->
<script src="/Public/admin/assets/js/jquery-2.0.3.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="/Public/admin/assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->
<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/Public/admin/assets/js/bootstrap.min.js"></script>
<script src="/Public/admin/assets/js/typeahead-bs2.min.js"></script>
<!-- page specific plugin scripts -->
<!--[if lte IE 8]>
<script src="/Public/admin/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="/Public/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/Public/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/admin/assets/js/jquery.slimscroll.min.js"></script>
<script src="/Public/admin/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/Public/admin/assets/js/jquery.sparkline.min.js"></script>
<script src="/Public/admin/assets/js/flot/jquery.flot.min.js"></script>
<script src="/Public/admin/assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="/Public/admin/assets/js/flot/jquery.flot.resize.min.js"></script>
<!-- ace scripts -->
<script src="/Public/admin/assets/js/ace-elements.min.js"></script>
<script src="/Public/admin/assets/js/ace.min.js"></script>
<!-- inline scripts related to this page -->

    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/admin/common.js"></script>
    <script src="/Public/js/admin/user.js"></script>



<!--导入js开始-->
</html>
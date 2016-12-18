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
    
    <script src="/Public/js/jquery.js"></script>

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

        
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">规则管理</a>
                </li>


                <li class="active">添加规则</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
                </form>
            </div><!-- #nav-search -->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <form id="singcms-form">
                        <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                            <thead>

                            <tr>
                                <th class="center" style="width:100px;">
                                    <label>
                                        <input type="checkbox" class="ace" id="ischeck" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th style="width:200px;">控制器</th>
                                <th>方法</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">后台基本操作</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Index/person" value="后台个人中心"><span class="lbl"> 后台个人中心</span></label>
                                    <label><input type="checkbox" class="ace" name="Index/dateTime" value="后台日历"><span class="lbl"> 后台日历</span></label>
                                    <label><input type="checkbox" class="ace" name="Index/photo" value="后台相册"><span class="lbl"> 后台相册</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">用户操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="User/index" value="查看用户"><span class="lbl"> 查看用户</span></label>
                                    <label><input type="checkbox" class="ace" name="User/add" value="添加用户页面"><span class="lbl"> 添加用户页面</span></label>
                                    <label><input type="checkbox" class="ace" name="User/insert" value="执行添加用户"><span class="lbl"> 执行添加用户</span></label>
                                    <label><input type="checkbox" class="ace" name="User/mod" value="用户修改页面"><span class="lbl"> 用户修改页面</span></label>
                                    <label><input type="checkbox" class="ace" name="User/update" value="执行用户修改"><span class="lbl"> 执行用户修改</span></label>
                                    <label><input type="checkbox" class="ace" name="User/del" value="删除用户"><span class="lbl"> 删除用户</span></label>
                                    <label><input type="checkbox" class="ace" name="User/setGroup" value="设置用户组"><span class="lbl"> 设置用户组</span></label>
                                    <label><input type="checkbox" class="ace" name="User/updateGroup" value="执行修改用户组"><span class="lbl"> 执行修改用户组</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">权限操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="UserGroup/members" value="查看会员组权限"><span class="lbl"> 查看会员组权限</span></label>
                                    <label><input type="checkbox" class="ace" name="UserGroup/defaults" value="查看默认组权限"><span class="lbl"> 查看默认组权限</span></label>
                                    <label><input type="checkbox" class="ace" name="UserGroup/systems" value="查看管理组权限"><span class="lbl"> 查看管理组权限</span></label>
                                    <label><input type="checkbox" class="ace" name="UserGroup/insert" value="添加会员组权限"><span class="lbl"> 添加会员组权限</span></label>
                                    <label><input type="checkbox" class="ace" name="UserGroup/mod" value="用户组权限页面"><span class="lbl"> 用户组权限页面</span></label>
                                    <label><input type="checkbox" class="ace" name="UserGroup/update" value="执行用户组权限修改"><span class="lbl"> 执行用户组权限修改</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">管理组操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="AuthGroup/index" value="查看管理组列表"><span class="lbl"> 查看管理组列表</span></label>
                                    <label><input type="checkbox" class="ace" name="AuthGroup/add" value="添加管理组页面"><span class="lbl"> 添加管理组页面</span></label>
                                    <label><input type="checkbox" class="ace" name="AuthGroup/insert" value="执行添加管理组"><span class="lbl"> 执行添加管理组</span></label>
                                    <label><input type="checkbox" class="ace" name="AuthGroup/mod" value="修改管理组页面"><span class="lbl"> 修改管理组页面</span></label>
                                    <label><input type="checkbox" class="ace" name="AuthGroup/update" value="执行修改管理组"><span class="lbl"> 执行修改管理组</span></label>
                                    <label><input type="checkbox" class="ace" name="AuthGroup/del" value="删除管理组"><span class="lbl"> 删除管理组</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">规则操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="AuthRule/index" value="添加规则列表页面"><span class="lbl"> 添加规则列表页面</span></label>
                                    <label><input type="checkbox" class="ace" name="AuthRule/insert" value="执行添加规则"><span class="lbl"> 执行添加规则</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">导航操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Nav/index" value="导航栏目浏览"><span class="lbl"> 导航栏目浏览</span></label>
                                    <label><input type="checkbox" class="ace" name="Nav/add" value="添加导航栏目页面"><span class="lbl"> 添加导航栏目页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Nav/insert" value="执行添加导航栏目"><span class="lbl"> 执行添加导航栏目</span></label>
                                    <label><input type="checkbox" class="ace" name="Nav/mod" value="修改导航栏目页面"><span class="lbl"> 修改导航栏目页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Nav/update" value="执行修改导航栏目"><span class="lbl"> 执行修改导航栏目</span></label>
                                    <label><input type="checkbox" class="ace" name="Nav/del" value="删除导航栏目"><span class="lbl"> 删除导航栏目</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">版块操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Type/index" value="版块列表页"><span class="lbl"> 版块列表页</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/add1" value="添加根版块页面"><span class="lbl"> 添加根版块页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/add2" value="添加子版块页面"><span class="lbl"> 添加子版块页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/insert1" value="执行添加根版块"><span class="lbl"> 执行添加根版块</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/insert2" value="执行添加子版块"><span class="lbl"> 执行添加子版块</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/mod" value="修改版块页面"><span class="lbl"> 修改版块页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/update" value="执行修改版块"><span class="lbl"> 执行修改版块</span></label>
                                    <label><input type="checkbox" class="ace" name="Type/del" value="删除板块"><span class="lbl"> 删除板块</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">帖子操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Card/index" value="帖子列表页"><span class="lbl"> 帖子列表页</span></label>
                                    <label><input type="checkbox" class="ace" name="Card/mod" value="修改帖子页面"><span class="lbl"> 修改帖子页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Card/update" value="执行修改帖子状态"><span class="lbl"> 执行修改帖子状态</span></label>
                                    <label><input type="checkbox" class="ace" name="Card/del" value="删除帖子"><span class="lbl"> 删除帖子</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">回复操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Comment/index" value="浏览回复信息页"><span class="lbl"> 浏览回复信息页</span></label>
                                    <label><input type="checkbox" class="ace" name="Comment/mod" value="修改回复信息页面"><span class="lbl"> 修改回复信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Comment/update" value="执行修改回复"><span class="lbl"> 执行修改回复</span></label>
                                    <label><input type="checkbox" class="ace" name="Comment/del" value="删除回复"><span class="lbl"> 删除回复</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">主题操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Verify/index" value="查看帖子主题信息"><span class="lbl"> 查看帖子主题信息</span></label>
                                    <label><input type="checkbox" class="ace" name="Verify/mod" value="处理帖子页面"><span class="lbl"> 处理帖子页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Verify/update" value="执行处理帖子"><span class="lbl"> 执行处理帖子</span></label>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">数据统计操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Total/index" value="浏览数据信息页面"><span class="lbl"> 浏览数据信息页面</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">敏感词操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Filter/index" value="浏览敏感词信息页面"><span class="lbl"> 浏览敏感词信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Filter/mod" value="修改敏感词页面"><span class="lbl"> 修改敏感词页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Filter/add" value="添加敏感词页面"><span class="lbl"> 添加敏感词页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Filter/insert" value="执行添加敏感词"><span class="lbl"> 执行添加敏感词</span></label>
                                    <label><input type="checkbox" class="ace" name="Filter/update" value="执行修改敏感词"><span class="lbl"> 执行修改敏感词</span></label>
                                    <label><input type="checkbox" class="ace" name="Filter/del" value="删除敏感词"><span class="lbl"> 删除敏感词</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">举报操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Inform/index1" value="浏览举报帖子页面"><span class="lbl"> 浏览举报帖子页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Inform/index2" value="浏览举报评论页面"><span class="lbl"> 浏览举报评论页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Inform/editCard" value="修改被举报的帖子"><span class="lbl"> 修改被举报的帖子</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">置顶操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Cardtop/index" value="浏览置顶信息页面"><span class="lbl"> 浏览置顶信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Cardtop/update" value="撤销置顶操作流程"><span class="lbl"> 撤销置顶操作流程</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">精华操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Essence/index" value="浏览精华信息页面"><span class="lbl"> 浏览精华信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Essence/update" value="撤销精华操作流程"><span class="lbl"> 撤销精华操作流程</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">友情链接操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Sharelikes/index" value="浏览友情链接页面"><span class="lbl"> 浏览友情链接页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Sharelikes/add" value="添加友情链接页面"><span class="lbl"> 添加友情链接页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Sharelikes/insert" value="执行添加友情链接"><span class="lbl"> 执行添加友情链接</span></label>
                                    <label><input type="checkbox" class="ace" name="Sharelikes/mod" value="修改友情链接页面"><span class="lbl"> 修改友情链接页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Sharelikes/update" value="执行修改友情链接"><span class="lbl"> 执行修改友情链接</span></label>
                                    <label><input type="checkbox" class="ace" name="Sharelikes/del" value="删除友情链接"><span class="lbl"> 删除友情链接</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">公告操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Announce/index" value="浏览公告信息页面"><span class="lbl"> 浏览公告信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Announce/add" value="添加公告页面"><span class="lbl"> 添加公告页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Announce/insert" value="执行添加公告"><span class="lbl"> 执行添加公告</span></label>
                                    <label><input type="checkbox" class="ace" name="Announce/mod" value="修改公告页面"><span class="lbl"> 修改公告页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Announce/ueditor" value="编辑器"><span class="lbl"> 编辑器</span></label>
                                    <label><input type="checkbox" class="ace" name="Announce/update" value="执行修改公告"><span class="lbl"> 执行修改公告</span></label>
                                    <label><input type="checkbox" class="ace" name="Announce/del" value="删除公告"><span class="lbl"> 删除公告</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">勋章操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Medalinfo/index" value="浏览勋章信息页面"><span class="lbl"> 浏览勋章信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Medalinfo/add" value="添加勋章页面"><span class="lbl"> 添加勋章页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Medalinfo/insert" value="执行添加勋章"><span class="lbl"> 执行添加勋章</span></label>
                                    <label><input type="checkbox" class="ace" name="Medalinfo/mod" value="修改勋章页面"><span class="lbl"> 修改勋章页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Medalinfo/update" value="执行修改勋章"><span class="lbl"> 执行修改勋章</span></label>
                                    <label><input type="checkbox" class="ace" name="Medalinfo/del" value="删除勋章"><span class="lbl"> 删除勋章</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">信息操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Message/index" value="浏览信息页面"><span class="lbl"> 浏览信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Message/add" value="添加信息页面"><span class="lbl"> 添加信息页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Message/ueditor" value="信息编辑器"><span class="lbl"> 信息编辑器</span></label>
                                    <label><input type="checkbox" class="ace" name="Message/insert" value="执行添加信息"><span class="lbl"> 执行添加信息</span></label>
                                    <label><input type="checkbox" class="ace" name="Message/del" value="删除信息"><span class="lbl"> 删除信息</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">积分操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Point/index" value="浏览积分页面"><span class="lbl"> 浏览积分页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Point/add" value="添加积分页面"><span class="lbl"> 添加积分页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Point/insert" value="执行添加积分"><span class="lbl"> 执行添加积分</span></label>
                                    <label><input type="checkbox" class="ace" name="Point/mod" value="修改积分页面"><span class="lbl"> 修改积分页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Point/update" value="执行修改积分"><span class="lbl"> 执行修改积分</span></label>
                                    <label><input type="checkbox" class="ace" name="Point/del" value="删除积分"><span class="lbl"> 删除积分</span></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" class="ace"  />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480">广告操作管理</td>
                                <td class="hidden-480">
                                    <label><input type="checkbox" class="ace" name="Ads/index" value="浏览广告页面"><span class="lbl"> 浏览广告页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Ads/add" value="添加广告页面"><span class="lbl"> 添加广告页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Ads/ueditor" value="信息编辑器"><span class="lbl"> 广告编辑器</span></label>
                                    <label><input type="checkbox" class="ace" name="Ads/insert" value="执行添加广告"><span class="lbl"> 执行添加广告</span></label>
                                    <label><input type="checkbox" class="ace" name="Ads/mod" value="执行修改广告页面"><span class="lbl"> 执行修改广告页面</span></label>
                                    <label><input type="checkbox" class="ace" name="Ads/update" value="执行修改广告"><span class="lbl"> 执行修改广告</span></label>
                                    <label><input type="checkbox" class="ace" name="Ads/del" value="删除广告"><span class="lbl"> 删除广告</span></label>
                                </td>
                            </tr>
                            </tbody>
                            <tr>
                                <td colspan="3">
                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">


                                            <button id="singcms-button-submit" class="btn btn-info" type="button">
                                                <i class="icon-ok bigger-110"></i>
                                                添加
                                            </button>

                                            &nbsp; &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="icon-undo bigger-110"></i>
                                                重置
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->

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

    <script type="text/javascript">

        var aces = document.getElementsByClassName("ace");
        var len = aces.length;
        aces[0].onclick = function(){
            for(var i = 1; i < len; i++){
                aces[i].checked = aces[0].checked;
            }
        }
        var SCOPE={
            'save_url' : "/index.php/Admin/Admin/dorule",

        }
    </script>
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
        <script src="/Public/js/admin/common.js"></script>

<!--导入js开始-->
</html>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <link rel="stylesheet" href="/lib/dist/css/zui.css" />
        <link rel="stylesheet" href="/lib/dist/css/zui.css" />
        <link rel="stylesheet" href="/css/common.css" />
        <script src="/lib/dist/lib/jquery/jquery-3.4.1.min.js"></script>
        <script src="/lib/dist/js/zui.min.js"></script>
        <script src="/js/common.js"></script>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
    <!--[if lt IE 8]>
    <div class="alert alert-danger">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="/lib/dist/lib/ieonly/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="/lib/dist/lib/ieonly/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="/lib/dist/lib/ieonly/excanvas.js"></script>
    <![endif]-->

    <style>
        .var-brand-title {
            margin-top: 5px;
        }
        .var-icon-user {
            font-size: 20px;
        }
        .var-navbar-form {
            margin-top: 5px;
        }
    </style>
    <header id="header" class="bg-primary">
        <div class="navbar navbar-inverse" id="navbar" role="banner">
            <div class="container">
                <a href="/" class="navbar-brand var-brand-title"><span class="path-zui-36"><i class="path-1"></i><i class="path-2"></i></span> <span class="brand-title"> <strong>Forum</strong></span></a>
                <form class="navbar-form" role="search">
                    <div class="var-navbar-form form-group col-lg-2">
                        <div class="input-group">
                            <div class="input-control search-box search-box-circle has-icon-left" id="search_forum_box">
                                <input id="search_forum" type="search" class="form-control search-input" style="width: inherit" placeholder="关键字">
                                <label for="search_forum" class="input-control-icon-left search-icon"><i class="icon icon-search"></i></label>
                            </div>
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">搜索</button>
                        </span>
                        </div>
                    </div>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <?php if($is_login):?>
                    <a title="发帖" class="navbar-brand var-brand-title" href="/article/edit"><span><i class="icon icon-edit var-icon-user" style=""></i></span></a>
                    <?php endif;?>
                    <li id="langSwitcher" class="dropdown-header dropdown-hover">
                            <a title="Your Profile" class="dropdown"><span> <i class="path-1"></i><i class="path-2"></i> <i class="icon icon-user var-icon-user"></i></span></a>
                            <ul class="dropdown-menu">
                                <?php if($is_login):?>
                                    <li><a href="/user/info">我的页面</a></li>
                                <li><a href="/user/loginOut">退出登陆</a></li>
                                <?php else:?>
                                <li><a type="button" data-toggle="modal" data-target="#login">登录</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#register">注册</a></li>
                                <?php endif;?>
                            </ul>
                    </li>
                </ul>
            </div>
    </header>
<?php if(!$is_login):?>
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h4 class="modal-title">请登录噢～</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="login-form">
                    <div class="form-group">
                        <label for="username" class="col-sm-2">账号：</label>
                        <div class="col-sm-6">
                            <input type="text" name="username" class="form-control" id="username" placeholder="登录用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2">密码：</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" id="password" placeholder="输入密码">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="login-submit">登录</button>
            </div>
        </div>
    </div>
</div>
    <script src="/js/user_login.js"></script>
<div class="modal fade" id="register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h4 class="modal-title">欢迎注册～</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="register-form">
                    <div class="form-group">
                        <label for="username" class="col-sm-2">登录用户名：</label>
                        <div class="col-sm-6">
                            <input type="text" name="username" class="form-control" id="register_username" placeholder="登录用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2">密码：</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" id="register_password" placeholder="密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2">确认密码：</label>
                        <div class="col-sm-6">
                            <input type="password" name="ensure_password" class="form-control" id="ensure_password" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2">昵称：</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control" id="register_nickname" placeholder="响亮的名字">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2">邮箱：</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control" id="email" placeholder="邮箱地址">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" id="register-submit">注册</button>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<div class="container-fixed">


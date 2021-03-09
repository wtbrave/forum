<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <link rel="stylesheet" href="/lib/dist/css/zui.css">
        <link rel="stylesheet" href="/lib/dist/css/zui.css">

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
                    <li id="langSwitcher"><a title="Switch language" href=""><span> <i class="path-1"></i><i class="path-2"></i> <i class="icon icon-user var-icon-user"></i></span></a></li>
                </ul>
            </div>
    </header>


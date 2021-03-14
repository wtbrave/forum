<?php get_view('header') ?>

<div class="clearfix" style="padding: 30px  100px 20px 100px;">
    <div  class="pull-left">
        <img src="/images/36.jpg" width="200px" height="200px" class="img-circle" alt="圆形图片">
    </div>
    <div class="pull-right">
        <h1 style="line-height: 500%">明月几时有</h1>
        <div style="width: 100%;text-align: right;">
            <a type="button" class=""><i class="icon icon-edit" style="font-size: 25px; "></i></a>
        </div>
    </div>
    <div>

    </div>
</div>
<hr>
<div class="" style="width: 100%; text-align: center;">
    <ul class="nav nav-simple nav-justified">
        <li class="active"><a href="/user/info?type=3">我的发布</a></li>
        <li><a href="/user/info?type=2">收藏</a></li>
        <li><a href="/user/info?type=1">关注</a></li>
        <li><a href="/user/info?type=1">粉丝</a></li>
    </ul>
</div>

<div class="list" style="margin-top: 30px;">
    <div class="items">
        <div class="item clearfix">
            <div class="item-heading">
                <div class="pull-right label label-success" style="margin-right: 70px">类型1</div>
            </div>
            <div class="item-content ">
                <div class="media pull-left"></div>
                <h5><a href="/article/show?art_id=1" >如何成长为一名合格的程序员</a></h5>
            </div>
            <div class="item-footer">
                <div class="pull-left"><span>2021-03-09 17:01:01</span></div>
                <div class="pull-right">
                    <span><i class="icon icon-star"></i> 0</span>&nbsp;&nbsp;&nbsp;
                    <span><i class="icon icon-heart"></i> 0</span>&nbsp;&nbsp;&nbsp;
                    <span><i class="icon icon-comment"></i> 2</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/article/edit?art_id=1"><i class="icon icon-edit" style="font-size: 25px;"></i></a> &nbsp;&nbsp;
                    <a href="/article/delete?art_id=1"><i class="icon icon-trash" style="font-size: 25px;color:indianred"></i></a>
            </div>
        </div>
    </div>
</div>


<?php get_view('bottom') ?>

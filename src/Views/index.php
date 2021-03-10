<?php get_view('header');?>
<div class="container-fixed">
    <div class="list">
        <div class="items">
            <div class="item clearfix">
                <div class="item-heading">
                    <div class="pull-right label label-success">类型1</div>
                </div>
                <div class="item-content ">
                    <div class="media pull-left"><img width="40px" height="40px" src="/images/36.jpg" style="margin-right: 20px" alt=""></div>
                    <h5><a href="/" >如何成长为一名合格的程序员</a></h5>
                </div>
                <div class="item-footer">
                    <div class="pull-left"><span style="font-weight: bold">明月几时有</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>2021-03-09 17:01:01</span></div>
                    <div class="pull-right"><span><i class="icon icon-star"></i> 0</span>&nbsp;&nbsp;&nbsp;<span><i class="icon icon-heart"></i> 0</span>&nbsp;&nbsp;&nbsp;<span><i class="icon icon-comment"></i> 0</span></div>
                </div>
            </div>
            <div class="item clearfix">
                <div class="item-heading">
                    <div class="pull-right label label-success">类型1</div>
                </div>
                <div class="item-content ">
                    <div class="media pull-left"><img width="40px" height="40px" src="/images/36.jpg" style="margin-right: 20px" alt=""></div>
                    <h5><a href="/" >如何成为一名合格的产品经理</a></h5>
                </div>
                <div class="item-footer">
                    <div class="pull-left"><span style="font-weight: bold">把酒问青天</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>2021-03-09 17:01:01</span></div>
                    <div class="pull-right"><span><i class="icon icon-star"></i> 0</span>&nbsp;&nbsp;&nbsp;<span><i class="icon icon-heart"></i> 0</span>&nbsp;&nbsp;&nbsp;<span><i class="icon icon-comment"></i> 0</span></div>
                </div>
            </div>
        </div>
        <ul id="myPager" class="pager" data-ride="pager" data-page="1" data-rec-total="10" data-max-nav-count="4" data-elements="prev,page_of_total_text,next"></ul>
    </div>
</div>
<script language="JavaScript">
    (function(){
        $('#myPager').pager({
            page: 1,
            recTotal: 1,
        });
    })();
</script>
<?php get_view('bottom');?>

<?php get_view('header') ?>

<article class="article article-condensed clearfix">
    <header>
        <h1>如何成长为一名合格的程序员</h1>
        <dl class="dl-inline">
            <dt>发布者</dt>
            <dd>明月几时有</dd>
            <dt>发布时间</dt>
            <dd>2021-03-09 17:01:01</dd>
            <dt></dt>
            <dd class="pull-right">
                <span><i class="icon icon-star"></i> 0</span>&nbsp;&nbsp;&nbsp;<span><i class="icon icon-heart"></i> 0</span>&nbsp;&nbsp;&nbsp;<span><i class="icon icon-comment"></i> 2</span>
            </dd>
        </dl>
    </header>

    <section class="content">
        渗透与提高的基本面
        <br>
        一阶段	语言层面
        <br>
        二阶段	数据层面
        <br>
        三阶段	服务层面
        <br>
        四阶段	网络层面
    </section>
    <footer>
        <dl class="dl-inline pull-right">
            <dt></dt><dd><a type="button"><i class="icon icon-star"></i></a>&nbsp;&nbsp;&nbsp;<a type="button"><i class="icon icon-heart"></i></a>&nbsp;&nbsp;&nbsp;</dd>
        </dl>
    </footer>
</article>

<div class="comments">
    <header>
        <div class="pull-right"><a href="#comment-form" class="btn btn-primary"><i class="icon-comment-alt"></i> 发表评论</a></div>
        <h3>所有评论数 <span style="color: green;">3</span></h3>
    </header>
    <?php foreach($replyList as $reply):?>
    <?php endforeach;?>
    <section class="comments-list">
        <div class="comment">
            <a href="/user/info?uid=1" class="avatar">
                <img width="40px" height="40px" src="/images/80.jpg" style="margin-right: 20px" alt="">
            </a>
            <div class="content">
                <div><a href="/user/info?uid=1"><strong>把酒问晴天</strong></a> </div>
                <div class="text">多看书，多学习</div>
                <div class="actions">
                    <a href="##">回复</a>
                    <a href="##">编辑</a>
                    <?php if(isset($reply['uid']) && $reply['uid'] == $uid):?>
                    <a href="##">删除</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="comment">
            <a href="/user/info?uid=1" class="avatar">
                <img width="40px" height="40px" src="/images/36.jpg" style="margin-right: 20px" alt="">
            </a>
            <div class="content">
                <div><a href="/user/info?uid=1"><strong>明月几时有</strong></a> <span class="text-muted">回复</span> <a href="###">把酒问青天</a></div>
                <div class="text">你说的对</div>
                <div class="actions">
                    <a href="##">回复</a>
                    <a href="##">编辑</a>
                    <a href="##">删除</a>
                </div>
            </div>
        </div>
        <ul id="reply-pager" class="pager center" data-ride="pager" data-page="1" data-rec-total="10" data-max-nav-count="4" data-elements="prev_icon,nav,next_icon"></ul>
    </section>


    <footer>
        <div class="reply-form" id="comment-form">
            <a href="/user/info?uid=1" class="avatar">
                <img width="40px" height="40px" src="/images/36.jpg" style="margin-right: 20px" alt="">
            </a>
            <form class="form">
                <div class="form-group">
                    <div class="col-md-9">
                        <textarea class="form-control new-comment-text" rows="2" placeholder="撰写评论..."></textarea>
                    </div>
                    <div class="col-md-1"><button type="submit" class="btn btn-block btn-primary">提交</button></div>
                </div>
            </form>
        </div>
    </footer>
</div>


<script language="JavaScript">
    (function(){
        $('#reply-pager').pager({
            page: 1,
            recTotal: 1,
            linkCreator: function(page, pager) {
                return 'mypage.html?page=' + page + '&totalCount=' + pager.recTotal;
            }
        });
    })();
</script>

<?php get_view('bottom') ?>


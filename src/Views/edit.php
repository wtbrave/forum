<?php get_view('header') ?>
<link rel="stylesheet" href="/lib/dist/lib/kindeditor/kindeditor.css">
<script src="/lib/dist/lib/kindeditor/kindeditor.min.js"></script>

<form class="form-horizontal" style="margin: 50px;">
    <div class="form-group">
        <label class="col-sm-2">标题</label>
        <div class="col-md-6 col-sm-10">
            <input type="text" class="form-control"  name="title" placeholder="输入帖子的标题呀～">
        </div>
    </div>
    <div class="form-group">
        <label for="" class="col-sm-2">发帖类型</label>
        <div class="col-sm-3">
            <select class="form-control" name="category">
                <option >选择类型</option>
                <option value="">类型1</option>
                <option value="">类型2</option>
                <option value="">类型3</option>
                <option value="">类型4</option>
                <option value="">类型5</option>
                <option value="">类型6</option>
                <option value="">类型7</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">发帖内容</label>
        <div class="col-md-8">
            <textarea class="form-control kindeditor" rows="5" placeholder="可以输入多行文本" style="height:150px;"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-primary">保存</button> &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-primary">发布</button> &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
</form>


<script language="JavaScript">
    KindEditor.create('textarea.kindeditor', {
        basePath: '/lib/dist/lib/kindeditor/',
        cssPath: '/lib/dist/css/zui.css',
        allowFileManager : true,
        bodyClass : 'article-content',     // 确保编辑器内的内容也应用 ZUI 排版样式
        allowPreviewEmoticons : false,
        allowImageUpload : false,
        // items : [
        //     'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
        //     'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
        //     'insertunorderedlist', '|', 'emoticons', 'image', 'link'
        // ]
    });
</script>
<?php get_view('bottom') ?>

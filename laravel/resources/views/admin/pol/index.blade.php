<?php
    $htmlData = '';
    if (!empty($_POST['pol_desc'])) {
        if (get_magic_quotes_gpc()) {
            $htmlData = stripslashes($_POST['pol_desc']);
        } else {
            $htmlData = $_POST['pol_desc'];
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="down/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="down/css/main.css"/>
    <script type="text/javascript" src="down/js/libs/modernizr.min.js"></script>
    <!-- 百度编辑器 -->
    <link rel="stylesheet" href="down/bianji/themes/default/default.css" />
    <link rel="stylesheet" href="down/bianji/plugins/code/prettify.css" />
    <script charset="utf-8" src="down/bianji/kindeditor.js"></script>
    <script charset="utf-8" src="down/bianji/lang/zh_CN.js"></script>
    <script charset="utf-8" src="down/bianji/plugins/code/prettify.js"></script>
</head>
<body>
@extends('admin/header')
@section('content')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增法律法规</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="policyadd" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>法规标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="pol_name" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>法规来源：</th>
                                <td>
                                    <input class="common-text required" id="title" name="pol_form" size="50" value="" type="text">
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>法规作者：</th>
                                <td>
                                    <input class="common-text required" id="title" name="pol_author" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>法规图片：</th>
                                <td><input name="pol_img" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>法规内容：</th>
                                <td><textarea name="pol_desc" style="width:700px;height:200px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
@stop
<script>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="pol_desc"]', {
                cssPath : 'down/bianji/plugins/code/prettify.css',
                uploadJson : 'down/bianji/php/upload_json.php',
                fileManagerJson : 'down/bianji/php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    </script>
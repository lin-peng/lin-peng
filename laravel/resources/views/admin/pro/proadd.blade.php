<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="down/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="down/css/main.css"/>
    <script type="text/javascript" src="down/js/libs/modernizr.min.js"></script>
</head>
<body>
@extends('admin/header')
@section('content')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="proadd">产品服务管理</a><span class="crumb-step">&gt;</span><span>新增产品服务</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="productadds" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>产品标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="pro_name" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>产品url：</th>
                                <td>
                                    <input class="common-text required" id="title" name="pro_link" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>产品图片：</th>
                                <td><input name="pro_img" id="" type="file"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>产品内容：</th>
                                <td><textarea name="pro_desc" class="common-textarea" cols="30" style="width: 98%;" rows="10"></textarea></td>
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
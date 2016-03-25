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
@extends("admin/header")
@section("content")
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="lunlist">轮播图管理</a><span class="crumb-step">&gt;</span><span>新增轮播图</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="lunadds" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                            
                                <select name="nav_id" id="catid" class="required"> 
                                <option value="">请选择</option>
                                @foreach($navrow as $k=>$v)
                                    <option value="{{$v->nav_id}}">{{$v->nav_name}}</option>
                                @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                                <th><i class="require-red">*</i>名称：</th>
                                <td><input class="common-text" name="lun_title" size="50" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>轮播图：</th>
                                <td>
                                <input type="file" name="lun_img" id="" size="50" >
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>是否显示：</th>
                                <td>
                                    <input type="radio" name="lun_status" value="1" checked>是
                                    &nbsp;&nbsp;
                                    <input type="radio" name="lun_status" value="0">否
                                </td>
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
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>名称</th>
                            <th>公司图片</th>
                            <th>公司电话</th>
                            <th>公司邮箱</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($companyall as $k=>$v)
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>{{$v->com_id}}</td>
                            <td title="发哥经典"><a target="_blank" href="#">{{$v->com_name}}</a>
                            </td>
                            <td><img src="{{$v->com_logo}}" alt="" width="100px;" height="50px;"></td>
                            <td>{{$v->com_phone}}</td>
                            <td>{{$v->com_email}}</td>
                            <td>{{$v->com_updatetime}}</td>
                            <td>
                                <a class="link-update" href="comall">更多</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
@stop
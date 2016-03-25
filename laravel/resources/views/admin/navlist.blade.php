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
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="navadd"><i class="icon-font"></i>新增导航</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                       
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>名称</th>
                            <th>状态</th>
                            <th>url</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($navall as $k=>$v)
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>{{$v->nav_id}}</td>
                            <td title=""><a target="_blank" href="#" title="{{$v->nav_name}}">{{$v->nav_name}}</a>
                            </td>
                            <td>
                            <?php 
                                if($v->nav_status == '1'){
                                echo "√";
                                }else{
                                echo "×";
                                }
                            ?>
                            </td>
                            <td>{{$v->nav_link}}</td>
                            <td>{{$v->nav_time}}</td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>
                        @endforeach
                       
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
@stop
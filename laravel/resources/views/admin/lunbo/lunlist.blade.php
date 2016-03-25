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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>轮播图</th>
                            <th>标题</th>
                            <th>分类</th>
                            <th>标题</th>
                            <th>显示</th>
                            <th>添加时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($lunlist as $k=>$v)
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>{{$v->lun_id}}</td>
                            <td title="发哥经典"><img src="{{$v->lun_img}}" alt="" width="150px;" height="50px;">
                            </td>
                            <td>{{$v->lun_title}}</td>
                            <td>{{$v->nav_name}}</td>
                            <td>{{$v->lun_title}}</td>
                            <td>
                            <?php
                                if($v->lun_status == "1")
                                {
                                    echo "是";
                                }else{
                                    echo "否";
                                }
                            ?>
                            </td>
                            <td>{{$v->lun_time}}</td>
                            <td>{{$v->lun_update_time}}</td>
                            <td>
                                <a class="link-update" href="lunupdate">修改</a>
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